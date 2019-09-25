<?php
session_start();
if(!$_SESSION['isLogin']) {
	header("location: ../login_page.php");
}
else {
	include("../db.php");
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Page</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <!-- SCRIPT -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

</head>
<body>
  <div class="backgroundAll"></div>
  
  <div class="columns">
    <div class="column is-2">
      <aside id="sidebar" class="menu">
        <div class="profile">
          <figure class="image is-64x64">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
          </figure>
          <p class="title is-5">
            Admin
          </p>
        </div>

        <p class="menu-label">
          Administration
        </p>
        <ul class="menu-list">
          <li>
            <a>Krabby Menu</a>
            <ul>
              <li id="view-menu"><a href="viewMenu.php">View Menu</a></li>
              <li id="edel-menu"><a href="edelMenu.php">Edit/Delete Menu</a></li>
            </ul>
          </li>
        </ul>
        <p class="menu-label">
          Transactions
        </p>
        <ul class="menu-list">
          <li id="order-history"><a href="orderHistory.php">Order History</a></li>
        </ul>
        <p class="menu-label">
            Account
          </p>
          <ul class="menu-list">
            <button style="width: 60%; margin: 0 20px; border-radius: 50px;"
                    class="button is-danger">
              Log Out
            </button>
          </ul>
      </aside>
    </div>
    <div class="column">

</body>
<script src="script/script.js"></script>
</html>'
?>