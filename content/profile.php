<?php include '../layout/header.php';?>
  <?php        
    include('../process/db.php');
    $query = mysqli_query($con,"SELECT * FROM users") or die(mysqli_error($con));   
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
            <figure class="image is-480x480">
              <img class="is-rounded" src="https://bulma.io/images/placeholders/480x480.png">
            </figure>
          </div>
          <div class="column">
            <h1 class="title">
              <?php echo $data['username'];?>
              John_Doe
            </h1>
            <p class="subtitle"><?php echo $data['email'];?>johndoe@krabby.com</p>
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
            <label class="label">First Name</label>
            <p class="subtitle has-text-weight-light">
              <?php echo $data['name'];?>
              John
            </p>

            <label class="label">Last Name</label>
            <p class="subtitle has-text-weight-light">
              <?php echo $data['name'];?>
              Doe
            </p>

            <label class="label">Sex</label>
            <p class="subtitle has-text-weight-light">
              <?php echo $data['sex'];?>
              Male
            </p>

            <label class="label">Birthday</label>
            <p class="subtitle has-text-weight-light">
              <?php echo $data['dateofbirth'];?>
              31 February 1920
            </p>

            <label class="label">Phone Number</label>
            <p class="subtitle has-text-weight-light">
              <?php echo $data['phonenumber'];?>
              08xx xxxx xxxx
            </p>
          </div>
          <div class="column">
            <label class="label">Bio</label>
            <p class="subtitle has-text-weight-light">
              <?php echo $data['bio'];?>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus aut, fugiat facere, eveniet sit id dicta itaque ad asperiores nihil nostrum. Numquam quidem repudiandae voluptate asperiores reiciendis temporibus maiores libero!
            </p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- CHANGE PASSWORD -->
    <?php 
      $id = $_GET['id'];
      $query_mysql = mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
      while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="../process/editpassword.php" method="POST">
      <div id="manage-acc" class="modal">
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
                <input class="input is-danger" type="password" placeholder="username" name="old_password" id="old_password">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>

            <div class="field">
              <label class="label">New password</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="password" placeholder="username" name="new_password" id="new_password">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>

            <div class="field">
              <label class="label">Re-type new password</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="password" placeholder="username" name="confirm_password" id="confirm_password">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>
          </section>
  
          <footer class="modal-card-foot">
            <button type="submit" class="button is-success" name="update" id="update">Save changes</button>
            <button class="button">Cancel</button>
          </footer>
        </div>
      </div>
    </form>
    <?php
      }
    ?>
    
    <!-- EDIT INFO -->
    <?php 
      $id = $_GET['id'];
      $query_mysql = mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
      while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="../process/editprofile.php" method="POST">
      <div id="edit-info" class="modal">
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
                <input class="input is-danger" type="text" placeholder="username" name="name" id="name" value="<?php echo $data['name']; ?>">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This name is invalid</p>
            </div>
  
            <div class="field">
              <label class="label">Username</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="text" placeholder="username" name="username" id="username" value="<?php echo $data['username']; ?>">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This username is invalid</p>
            </div>
  
            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="email" placeholder="username" name="email" id="email" value="<?php echo $data['email']; ?>">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>

            <div class="field">
              <label class="label">Date of birth</label>
              <div class="control">
                <input class="input is-danger" type="date" name="dateofbirth" id="dateofbirth" value="<?php echo $data['dateofbirth']; ?>">
              </div>
            </div>

            <div class="field">
              <label class="label">Bio</label>
              <div class="control">
                <input class="textarea is-danger" type="text" name="bio" id="bio" value="<?php echo $data['bio']; ?>">
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>
          </section>
  
          <footer class="modal-card-foot">
            <button type="submit" class="button is-success" name="update" id="update">Save changes</button>
            <button class="button">Cancel</button>
          </footer>
        </div>
      </div>
    </form>
    <?php
      }
    ?>
    <?php include '../layout/footer.php';?>
  </body>
  <script>
    document.getElementById('nav-profile').classList.add('is-active')
  </script>
</html>