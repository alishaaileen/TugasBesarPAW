<?php 
if(isset($_POST['update'])){
    include('../process/db.php');
    
    $id = $_POST['id'];
    $nama_user = $_POST['nama_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $bio = $_POST['bio'];
    
    $input = mysqli_query($con,"UPDATE user SET nama_user='$nama_user', username='$username', email='$email', no_hp='$no_hp', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin',
    bio='$bio' WHERE id='$id'")or die(mysqli_error($con));

    if($input){
        echo '<script>alert("Profile Has Been Edited!"); window.location = "../content/profile.php"</script>';
    }else{
        echo '<script>alert("Update Failed!");<script>window.location = "../content/profile.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>