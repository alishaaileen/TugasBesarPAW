<?php if(isset($_POST['store'])){
    include('../db.php');
 
    $id = $_POST['id'];
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $tanggalLahir = $_POST['tglLahir'];
    $nomorHandphone = $_POST['noTelp'];
    $jenisKelamin = $_POST['gender']; 

    $update = mysqli_query($con,"UPDATE customer SET email='$email', tanggalLahir='$tanggalLahir', nomorHandphone='$nomorHandphone', jenisKelamin='$jenisKelamin', name='$name' WHERE id = '$id'")or die(mysqli_error($con));
    if($update){
        echo '<script>alert("successfully updated"); window.location = "../dashboard/listPeserta.php"</script>';
    }else{
        echo '<script>alert("failed to update"); window.location = "../dashboard/listPeserta.php"</script>';
    }
}else{
    echo '<script>alert("aa");window.history.back()</script>';
}

?> 