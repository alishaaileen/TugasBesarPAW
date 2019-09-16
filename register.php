<?php

echo '<!DOCTYPE html>
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
          <form action="" action="POST">
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
              <label class="label">Phone</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="text" placeholder="username">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This phone number is invalid</p>
            </div>

            <div class="field">
              <label class="label">Date of birth</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="date">
              </div>
              <p class="help is-danger">This date of birth is invalid</p>
            </div>
            
            <div class="field">
              <label class="label">Sex</label>
              <div class="control">
                <div class="select">
                  <select>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="rather not say">Rather not say</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="field">
              <label class="label">Password</label>
              <div class="control has-icons-right">
                <input class="input is-danger" type="password">
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This password is invalid</p>
            </div>
            
            <div class="field">
              <div class="control">
                <button type="submit" class="button is-link">Sign Up</button>
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
</html>';
?>