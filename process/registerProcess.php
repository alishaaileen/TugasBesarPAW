<?php

if(isset($_POST['register'])) {
    include('db.php'); 
 
    $nama_user = $_POST['nama_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $bio = $_POST['bio'];

    $input = mysqli_query($con,"INSERT INTO user(nama_user,username,email,no_hp,tgl_lahir,jenis_kelamin,password,bio) VALUES('$nama_user','$username','$email','$no_hp','$tgl_lahir','$jenis_kelamin','$password','$bio')" )or die(mysqli_error($con));
    if($input){
        echo '<script>alert("success"); window.location = "../login.php"</script>';
    }else{
        echo '<script>alert("failed"); window.location = "../register.php"</script>';
    }
}
else {
    echo '<script>window.history.back()</script>';
}

?>