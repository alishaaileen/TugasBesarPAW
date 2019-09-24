<?php

if(isset($_POST['store1'])) {
    include('../db.php'); 
 
    $name = $_POST['nama'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $nomorHandphone = $_POST['nomorHandphone'];
    $pendidikan = $_POST['pendidikan'];
    $ipk = $_POST['ipk'];
    $cumlaude = $_POST['cumlaude'];
    $alamatKerja = $_POST['alamatKerja'];
    $alamatKota = $_POST['alamatKota'];

    $input = mysqli_query($con,"INSERT INTO pegawai(nama,email,gender,nomorHandphone,pendidikan, ipk, cumlaude, alamtKerja, kotaKerja)
    VALUES('$name','$email','$gender','$nomorHandphone','$pendidikan','$ipk', '$cumlaude', '$alamatKerja', '$alamatKota')" )or die(mysqli_error($con));
    if($input){
        echo '<script>alert("success"); window.location = "../dashboard/listPegawai.php"</script>';
    }else{
        echo '<script>alert("failed"); window.location = "../dashboard/bukuManager.php"</script>';
    }
}
else {
    echo '<script>window.history.back()</script>';
}

?>