<?php

session_start();
if(isset($_SESSION['isLogin'])) {
  if($_SESSION['isLogin'] == true) {
    header("location: content/home.php");
  }
  else {
    include("process/db.php");
  }
}
else {
  include("process/db.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krusty Krab</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="css/login-register.css">

    <!-- SCRIPT -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    <section id="#bg" class="hero section is-small is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">Log In</h1>
        </div>
      </div>
      <!-- <div class="bg"></div>
      <div class="tile ">
        <figure class="image">
          <img src="images/bg.jpeg">
        </figure>
      </div> -->
    </section>
    
    <section class="section">
      <div class="kotak">

        <div class="head">
          <h1 class="title has-text-white">Log In</h1>
        </div>
        <div class="content">
          <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="field">
              <label class="label">Username</label>
              <div class="control">
                <input class="input" type="text" placeholder="Username" name="username">
              </div>
            </div>
            
            <div class="field">
              <label class="label">Password</label>
              <div class="control">
                <input class="input" type="password" name="password" placeholder="Password">
              </div>
            </div>
            <p style="display: none;" id="help" class="help is-danger">Incorrect username or password</p>
            <div class="field">
              <div class="control">
                <button type="submit" class="button is-success" name="login">Log In</button>
              </div>
            </div>
          </form>
          <p class="help">Don\'t have an account? <a href="register.php">Register here</a></p>

        </div>
      </div>
    </section>

    <footer class="footer">
      <p class="has-text-centered has-text-weight-light">
        Made with ❤ by Kelompok 6 PAW kls C<br/><br/>
        Alisha Aileen | Alexander Rivelino | Raditya Dimas | Yanuarius Hermawan
      </p>
    </footer>
  </body>
  <script>
  function isInvalid() {
    danger = document.getElementById("help");
    console.log(danger);
    danger.style.display = "block";
  }
</script>
</html>

<?php
  $username = $password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
  
    $query = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' Limit 1") or die(mysqli_error($con));
  
    if(mysqli_num_rows($query) == 0) {
      echo '<script>alert("Username not found"); window.location = "../login_page.php"</script>';
    }
    else {
      $user = mysqli_fetch_assoc($query);
      if(password_verify($password, $user['password'])) {
        // session_start();
        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = $user;
        echo 'window.location = "content/home.php"</script>';
      }
      else {
        echo '
          <script type="text/javascript">
            isInvalid();
          </script>
        ';
      }
    }
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>