<?php include '../layout/header.php';?>
<?php session_start(); ?>
  <?php        
    include('../process/db.php');
    $user = $_SESSION['user'];
    $id = $user['id'];
    $query = mysqli_query($con,"SELECT * FROM user WHERE id='$id'") or die(mysqli_error($con));   
    $data = mysqli_fetch_assoc($query)
  ?>  
    <section id="content" class="section">
      <div class="container">
        <!-- Bagian atas -->
        <div class="head-content">
          <h1 class="title">
            Profile
          </h1>
          <p class="subtitle">Manage your profile and account</p>
        </div>
        
        <!-- Bagian foto dan username -->
        <div class="columns is-mobile">
          <div class="column is-2">
            <div class="field">
              <figure class="image is-480x480">
                <?php if($data['profile_image']==NULL): ?>
                  <img class="is-rounded" src="https://bulma.io/images/placeholders/480x480.png">
                <?php else: ?>
                  <img class="is-rounded" src="../images/<?php echo $data['profile_image'];?>">
                <?php endif; ?>
              </figure>
            </div>
            <div class="field has-text-centered">
              <button class="button modal-button has-text-centered " data-target="change-profile">
                Change Profile Picture
              </button>
            </div>
          </div>
          <div class="column">
            <h1 class="title">
              <?php echo $data['username'];?>
            </h1>
            <p class="subtitle"><?php echo $data['email'];?></p>
            <button class="button modal-button" data-target="edit-info">
              Edit Info
            </button>
            <button class="button modal-button" data-target="manage-acc">
              Change Password
            </button>
          </div>
        </div>

        <!-- Bagian foto dan username -->
        <div class="columns">
          <div class="column">
            <label class="label">Name</label>
            <p class="subtitle has-text-weight-light">
            <?php echo $data['nama_user'];?>
            </p>

            <label class="label">Sex</label>
            <p class="subtitle has-text-weight-light">
              <?php if($data['jenis_kelamin']==0){
                  echo 'Male';
                }else if($data['jenis_kelamin']==1){
                  echo 'Female';
                }else{
                  echo '[REDACTED]';
                }?>
            </p>

            <label class="label">Birthday</label>
            <p class="subtitle has-text-weight-light">
              <?php echo $data['tgl_lahir'];?>
            </p>

            <label class="label">Phone Number</label>
            <p class="subtitle has-text-weight-light">
              <?php echo $data['no_hp'];?>
            </p>
          </div>
          <div class="column">
            <label class="label">Bio</label>
            <p class="subtitle has-text-weight-light">
            <?php if($data['bio']==NULL)
                {
                  echo '[REDACTED]';
                }else{
                  echo $data['bio'];
                }?>
            </p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- CHANGE PASSWORD -->
    
    <form name="update" action="../process/editpassword.php" method="POST">
      <div id="manage-acc" class="modal" id="myModal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Change Password</p>
            <button class="delete modal-close" aria-label="close"></button>
          </header>
  
          <section class="modal-card-body">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <input type="hidden" name="password" value="<?php echo $data['password']; ?>">
            <div class="field">
              <label class="label">Old password</label>
              <div class="control has-icons-right">
                <input class="input" type="password" placeholder="username" name="old_password">
              </div>
              <p style="display: none" class="old_password is-danger">invalid password</p>
            </div>

            <div class="field">
              <label class="label">New password</label>
              <div class="control has-icons-right">
                <input class="input" type="password" placeholder="username" name="new_password">
              </div>
              <p style="display: none" class="new_password is-danger">invalid password</p>
            </div>

            <div class="field">
              <label class="label">Re-type new password</label>
              <div class="control has-icons-right">
                <input class="input" type="password" placeholder="username" name="confirm_password">
              </div>
              <p style="display: none" class="confirm_password is-danger">invalid password</p>
            </div>
          </section>
  
          <footer class="modal-card-foot">
            <button type="submit" class="button is-success" name="update" onclick="return cekPasswordChange()">Save changes</button>
            <button class="button">Cancel</button>
          </footer>
        </div>
      </div>
    </form>
    
    <!-- CHANGE PROFILE PICTURE -->

    <form action="../process/profilepicture.php" method="post" enctype="multipart/form-data">
      <div id="change-profile" class="modal" id="myModal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Change profile Picture</p>
            <button class="delete modal-close" aria-label="close"></button>
          </header>
          <section class="modal-card-body">
            <?php if (!empty($msg)): ?>
              <div class="alert <?php echo $msg_class ?>" role="alert">
                <?php echo $msg; ?>
              </div>
            <?php endif; ?>
            <div class="field">
              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              <div class="control has-icons-right">
                <figure class="image is-480x480">
                  <img class="is-rounded" src="https://bulma.io/images/placeholders/480x480.png" onClick="triggerClick()" id="profileDisplay">
                </figure>
                <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                <p>Click on Image to Browse Picture</p>
              </div>
              <p style="display: none" style="display: none" class="nama_user is-danger">This name is invalid</p>
            </div>

          </section>
          <footer class="modal-card-foot">
            <button type="submit" class="button is-success" name="save_profile">Save User</button>
            <button class="button">Cancel</button>
          </footer>
        </div>
      </div>
    </form>

    <!-- EDIT INFO -->
    <form name="update" action="../process/editprofile.php" method="POST">
      <div id="edit-info" class="modal" id="myModal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Edit Info</p>
            <button class="delete modal-close" aria-label="close"></button>
          </header>
  
          <section class="modal-card-body">
            <div class="field">
              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              <label class="label">Name</label>
              <div class="control has-icons-right">
                <input class="input" type="text" placeholder="Name" name="nama_user" value="<?php echo $data['nama_user']; ?>">
              </div>
              <p style="display: none" style="display: none" class="nama_user is-danger">This name is invalid</p>
            </div>
  
            <div class="field">
              <label class="label">Username</label>
              <div class="control has-icons-right">
                <input class="input" type="text" placeholder="Username" name="username" value="<?php echo $data['username']; ?>">
              </div>
              <p style="display: none" class="username is-danger">This username is invalid</p>
            </div>
  
            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-right">
                <input class="input" type="email" placeholder="Email" name="email" value="<?php echo $data['email']; ?>">
              </div>
              <p style="display: none" class="email is-danger">This email is invalid</p>
            </div>

            <div class="field">
              <label class="label">Date of birth</label>
              <div class="control">
                <input class="input" type="date" placeholder="Date of birth" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
              </div>
            </div>
            
            <div class="field">
              <label class="label">Sex</label>
              <div class="control has-icons-right">
                <div class="select">
                <?php
                  if($data['jenis_kelamin'] == "0"){
                      echo '<select class="jenis_kelamin" name="jenis_kelamin">
                              <option value="0" selected>Male</option>
                              <option value="1">Female</option>
                              <option value="2">Rather not say</option>
                            </select>';
                  }else if($data['jenis_kelamin'] == "1"){
                    echo '<select class="jenis_kelamin" name="jenis_kelamin">
                            <option value="0">Male</option>
                            <option value="1" selected>Female</option>
                            <option value="2">Rather not say</option>
                          </select>';
                  }else{
                    echo '<select class="jenis_kelamin" name="jenis_kelamin">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            <option value="2" selected>Rather not say</option>
                          </select>';
                  }
                ?>
                </div>
              </div>
              <p style="display: none" class="jenis_kelamin is-danger">This phone number is invalid</p>
            </div>
            
            <div class="field">
              <label class="label">Phone Number</label>
              <div class="control has-icons-right">
                <input class="input" type="text" placeholder="Phone Number" name="no_hp" value="<?php echo $data['no_hp']; ?>">
              </div>
              <p style="display: none" class="no_hp is-danger">This phone number is invalid</p>
            </div>

            <div class="field">
              <label class="label">Bio</label>
              <div class="control">
                <textarea class="textarea" placeholder="Bio" name="bio"><?php echo $data['bio']; ?></textarea>
              </div>
              <p style="display: none" class="bio is-danger">This bio is invalid</p>
            </div>
          </section>
          <footer class="modal-card-foot">
            <button type="submit" class="button is-success" name="update" onclick="return cekAll()">Save changes</button>
            <button class="button">Cancel</button>
          </footer>
        </div>
      </div>
    </form>
    <?php include '../layout/footer.php';?>
  </body>
  <script src="../js/validateUpdateProfile.js"></script>
  <script src="../js/validateChangePassword.js"></script>
  <script>
    document.getElementById('nav-profile').classList.add('is-active')
  </script>
</html>