<?php
echo '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krusty Krab</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="../css/home.css">

    <!-- SCRIPT -->
    <script src="../js/script.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    <nav class="navbar is-link" role="navigation" aria-label="main navigation" style="background-color: #357ef4;">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
          <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-end">
          <a id="nav-home" class="navbar-item" href="home.php">
            Home
          </a>
    
          <a id="nav-order" class="navbar-item" href="menu.php">
            Order
          </a>

          <a id="nav-vouchers" class="navbar-item" href="voucher.php">
            Vouchers
          </a>
    
          <a id="nav-profile" class="navbar-item" href="profile.php">
            Profile
          </a>
    
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-danger" style="border-radius: 50px;">
                Log out
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </nav>';
?>