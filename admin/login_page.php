<?php
session_start();
if(isset($_SESSION['isLogin'])) {
  if($_SESSION['isLogin'] == true) {
    header("location: dashboard/");
  }
  else {
    include("db.php");
  }
}
else {
  include("db.php");
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
    <section id="#bg" class="hero section is-small is-link">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">Admin Log In</h1>
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
          <h1 class="title has-text-white">Admin Log In</h1>
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
            <p style="display: none;" id="incorrect" class="help is-danger">Incorrect username or password</p>
            <div class="field">
              <div class="control">
                <button type="submit" class="button is-link" name="login">Log In</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </section>

    <footer class="footer">
      <p class="has-text-centered has-text-weight-light">
        Made with ❤ by Kelompok 6 PAW kls C<br/><br/>
        Alisha Aileen | Alexander Rivelino | Raditya Dimas | Yanuarius
      </p>
    </footer>
  </body>
  <script>
  function isInvalid(invalid) {
    danger = document.getElementById(invalid);
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
    
    if($username == "admin" && $password == "admin") {
        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = $user;
        echo 'window.location = "dashboard"</script>';
    }
    else {
        echo '
        <script type="text/javascript">
          isInvalid("incorrect");
        </script>';
    }
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>