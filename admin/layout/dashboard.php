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
    <title>Dashboard</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
	
	<!-- SCRIPT -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

</head>
<body>
	<div class="backgroundAll"></div>
	<div id="sidebar">
		<div class="sideheader">
			<div class="name">
				<h1>Company Logo</h1>
				<p>Company name</p>
			</div>
			<div class="hamburgerbar">
				<a href="#" onclick="hamburgerFunc()">
					<div>
						<div class="bar topbar"></div>
						<div class="bar middlebar"></div>
						<div class="bar bottombar"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="sidebody">
			<div class="sidebodypart">
				<ul>
					<li id="dashboardTab"><a href="index.php"><p>Dashboard</p></a></li>
					<li id="listUser"><a href="./listMenu.php"><p>Data Menu</p></a></li>
					<li id="userTab"><a href="./tambahMenu.php"><p>Ubah Menu</p></a></li>
					<li id="list-pegawai"><a href="./listPegawai.php"><p>List Buku</p></a></li>
				</ul>
			</div>
		</div>
  </div>
  <div id="navbar">
    <div class="barinfo">
      <a href="../proses/prosesLogout.php"><button class="button is-danger">Logout</button></a>
    </div>
  </div>
</body>
<script src="script/script.js"></script>
</html>'
?>