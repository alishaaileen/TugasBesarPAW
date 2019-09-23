<?php

if(isset($_POST['store1'])){
    include('../db.php');
 
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $nomorHandphone = $_POST['nomorHandphone'];
    $pendidikan = $_POST['pendidikan'];
    $ipk = $_POST['ipk'];
    $cumlaude = $_POST['cumlaude'];
    $alamatKerja = $_POST['alamatKerja'];
    $alamatKota = $_POST['alamatKota'];

    $update = mysqli_query($con,"UPDATE pegawai SET nama='$nama',email='$email',gender='$gender',nomorHandphone='$nomorHandphone',pendidikan='$pendidikan',ipk='$ipk', cumlaude='$cumlaude', alamtKerja='$alamatKerja', kotaKerja='$alamatKota' WHERE id = '$id'")or die(mysqli_error($con));
    if($update){
        echo '<script>alert("successfully updated"); window.location = "../dashboard/listPegawai.php"</script>';
    }else{
        echo '<script>alert("failed to update"); window.location = "../dashboard/listPegawai.php"</script>';
    }
}else{
    echo '<script>alert("aa");window.history.back()</script>';
}

?> 