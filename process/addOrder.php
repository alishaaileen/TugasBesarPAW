<?php

if(isset($_POST['addOrder'])){
    include('../db.php');
 
    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $jumlah = $_POST['jumlah'];
    $pesan = $_POST['pesan'];

    $order = mysqli_query($con,"INSERT INTO order SET nama_makanan='$nama_makanan',
    jumlah='$jumlah,
    pesan='$pesan'
    WHERE id = '$id'")or die(mysqli_error($con));
    if($order){
        echo '<script>alert("successfully ordered!"); window.location = "../content/order.php"</script>';
    }else{
        echo '<script>alert("failed to update"); window.location = "../content/order.php"</script>';
    }
}else{
    echo '<script>alert("aa");window.history.back()</script>';
}

?> 