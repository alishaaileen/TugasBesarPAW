<?php

if(isset($_POST['addOrder'])){
    include('../process/db.php');

    $nama_makanan = $_POST['nama_makanan'];
    $jumlah = $_POST['jumlah'];
    $pesan = $_POST['pesan'];
    $gambar = $_POST['gambar'];
    $jenis_order = $_POST['jenis_order'];

    $input = mysqli_query($con,"INSERT INTO order_menu(nama_makanan,jumlah,pesan,gambar,jenis_order)VALUES('$nama_makanan','$jumlah','$pesan','$gambar','$jenis_order')")
    or die(mysqli_error($con));
    if($input){
        echo '<script>alert("successfully ordered!"); window.location = "../content/menu.php"</script>';
    }else{
        echo '<script>alert("failed to update"); window.location = "../content/order.php"</script>';
    }
}else{
    echo '<script>alert("aa");window.history.back()</script>';
}

?> 