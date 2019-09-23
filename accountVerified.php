<?php

if (!isset($_GET['email']) || !isset($_GET['token'])) {
    echo '<script>alert("email tidak ketemu!");</script>';
    redirect();
} else {
    include "process/db.php";

    $email = $con->real_escape_string($_GET['email']);
    $token = $con->real_escape_string($_GET['token']);

    $sql = $con->query("SELECT id FROM user WHERE email='$email' AND token='$token' AND isVerified=0");

    if($sql->num_rows > 0) {
        $con->query("UPDATE user SET isVerified=1, token='' WHERE email='$email'");
        echo 'Your email is verified! You may login now';
    } else {
        echo '<script>alert("anda belum mendaftar!");</script>';
        redirect();
    }
}

function redirect() {
    header("Location: register.php");
    exit();
}

?>