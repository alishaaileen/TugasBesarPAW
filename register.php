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
          <h1 class="title">Registration</h1>
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
      <div class="kotak register">

        <div class="head">
          <h1 class="title has-text-white">Register</h1>
        </div>
        <div class="content">
          <form name="register" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" placeholder="Full name" name="nama_user">
              </div>
              <p style="display: none" class="nama_user help is-danger">This name is invalid</p>
            </div>

            <div class="field">
              <label class="label">Username</label>
              <div class="control">
                <input class="input" type="text" placeholder="Username" name="username">
              </div>
              <p style="display: none" class="username help is-danger">This username is invalid</p>
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input class="input" type="email" placeholder="Email" name="email">
              </div>
              <p style="display: none" class="email help is-danger">This email is invalid</p>
            </div>

            <div class="field">
              <label class="label">Phone</label>
              <div class="control">
                <input class="input" type="text" placeholder="08XX XXXX XXXX" name="no_hp">
              </div>
              <p style="display: none" class="no_hp help is-danger">This phone number is invalid</p>
            </div>

            <div class="field">
              <label class="label">Date of birth</label>
              <div class="control">
                <input class="input" type="date" name="tgl_lahir">
              </div>
              <p style="display: none" class="tgl_lahir help is-danger">This date of birth is invalid</p>
            </div>
            
            <div class="field">
              <label class="label">Sex</label>
              <div class="control">
                <div class="select">
                  <select class="jenis_kelamin" name="jenis_kelamin">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    <option value="2">Rather not say</option>
                  </select>
                </div>
                <p style="display: none" class="jenis_kelamin help is-danger">Please choose one</p>
              </div>
            </div>
            
            <div class="field">
              <label class="label">Password</label>
              <div class="control has-icons-right">
                <input class="input" type="password" name="password">
              </div>
              <p style="display: none" class="password help is-danger">This password is invalid</p>
            </div>
            <input type="hidden" name="bio">

            <p class="is-exist subtitle" style="color: red; display: none;">
              Username has been taken!
            </p>

            <p class="success subtitle" style="color: green; display: none;">
              You're registered!
              <br/>Please verify your email and then <a href="login.php">Log in here</a>
            </p>
            
            <div class="field">
              <div class="control">
                <button name="register" type="submit" class="button is-link" onclick="return cekAll()">Sign Up</button>
              </div>
            </div>
          </form>
          <p class="help">Already have an account? <a href="login.php">Log in here</a></p>

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
  <script src="js/validateRegister.js"></script>
  <script>
    function isSuccess() {
      success = document.getElementsByClassName("success")[0];
      success.style.display = "block";
      success.focus();
    }

    function isUnameExist() {
      exist = document.getElementsByClassName("is-exist")[0];
      exist.style.display = "block";
      exist.focus();
    }
  </script>
</html>

<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';
  require 'vendor/autoload.php';

  $username = $password = $nama_user = $email = $no_hp = $tgl_Lahir = $bio =  "";
  $jenis_kelamin = 0;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $nama_user = test_input($_POST['nama_user']);
    $email = test_input($_POST['email']);
    $no_hp = test_input($_POST['no_hp']);
    $tgl_lahir = test_input($_POST['tgl_lahir']);
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password = password_hash(test_input($_POST['password']), PASSWORD_BCRYPT);
    $bio = test_input($_POST['bio']);
    $profile_image = "";

    $cekUsername = $con->query("SELECT id FROM user WHERE username = '$username'");
    if($cekUsername->num_rows > 0){
      echo '<script>isUnameExist();</script>';
    } else {
      $token = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
      $token = str_shuffle($token);
      $token = substr($token, 0, 10);
      $isVerified = 0;

      $input = mysqli_query($con,"INSERT INTO user(nama_user,username,email,no_hp,tgl_lahir,jenis_kelamin,password,bio,token,isVerified,profile_image) 
        VALUES('$nama_user','$username','$email','$no_hp','$tgl_lahir','$jenis_kelamin','$password','$bio','$token','$isVerified','$profile_image')" )or die(mysqli_error($con));
        
    $linkVerif = "http://paw-aileen.tugasbesarkami.com/accountVerified.php?email=$email&token=$token";
      
      $mail = new PHPMailer();
    //   $mail->SMTPDebug = 2;
      $mail->IsSMTP();
      $mail->SMTPSecure = 'tls';
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = "paw.klp6@gmail.com";
      $mail->Password = "paw--klp6!@";
      $mail->Port = 587;

      $mail->setFrom('paw.klp6@gmail.com', 'Krabby Patty');
      $mail->addAddress($email, $nama_user);
      $mail->Subject = "[KRABBY PATTY] Please verify your email";
      $mail->isHTML(true);
      $mail->Body = '
        You have registered to Krabby Patty Website.<br/>
        Please click the link below to verify your email.
        <br/><br/>
        <a href="'.$linkVerif.'">Cick here</a>
      ';

      if($mail->send()){
        echo '<script>isSuccess();</script>';
      }else{
        echo '<script>alert("Something went wrong, please try again");</script>';
        echo $mail->ErrorInfo;
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