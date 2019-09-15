<?php include '../layout/header.php';?>

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
              John_Doe
            </h1>
            <p class="subtitle">johndoe@krabby.com</p>
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
              John
            </p>

            <label class="label">Last Name</label>
            <p class="subtitle has-text-weight-light">
              Doe
            </p>

            <label class="label">Sex</label>
            <p class="subtitle has-text-weight-light">
              Male
            </p>

            <label class="label">Birthday</label>
            <p class="subtitle has-text-weight-light">
              31 February 1920
            </p>

            <label class="label">Phone Number</label>
            <p class="subtitle has-text-weight-light">
              08xx xxxx xxxx
            </p>
          </div>
          <div class="column">
            <label class="label">Bio</label>
            <p class="subtitle has-text-weight-light">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus aut, fugiat facere, eveniet sit id dicta itaque ad asperiores nihil nostrum. Numquam quidem repudiandae voluptate asperiores reiciendis temporibus maiores libero!
            </p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- CHANGE PASSWORD -->
    <form action="" action="POST">
      <div id="manage-acc" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Change Password</p>
            <button class="delete modal-close" aria-label="close"></button>
          </header>
  
          <section class="modal-card-body">
            <div class="field">
              <label class="label">Old password</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="password" placeholder="username">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>

            <div class="field">
              <label class="label">New password</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="password" placeholder="username">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>

            <div class="field">
              <label class="label">Re-type new password</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="password" placeholder="username">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>
          </section>
  
          <footer class="modal-card-foot">
            <button type="submit" class="button is-success">Save changes</button>
            <button class="button">Cancel</button>
          </footer>
        </div>
      </div>
    </form>

    <!-- EDIT INFO -->
    <form action="" action="POST">
      <div id="edit-info" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Edit Info</p>
            <button class="delete modal-close" aria-label="close"></button>
          </header>
  
          <section class="modal-card-body">
            <div class="field">
              <label class="label">Name</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="text" placeholder="username">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This name is invalid</p>
            </div>
  
            <div class="field">
              <label class="label">Username</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="text" placeholder="username">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This username is invalid</p>
            </div>
  
            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="email" placeholder="username">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>

            <div class="field">
              <label class="label">Date of birth</label>
              <div class="control">
                <input class="input is-danger" type="date">
              </div>
            </div>

            <div class="field">
              <label class="label">Bio</label>
              <div class="control">
                <input class="textarea is-danger" type="text">
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>
          </section>
  
          <footer class="modal-card-foot">
            <button type="submit" class="button is-success">Save changes</button>
            <button class="button">Cancel</button>
          </footer>
        </div>
      </div>
    </form>

    <?php include '../layout/footer.php';?>
  </body>
</html>