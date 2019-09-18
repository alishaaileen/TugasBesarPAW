<?php 
if(isset($_POST['update'])){
    include('../process/db.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dateofbirth = $_POST['dateofbirth'];
    $bio = $_POST['bio'];
    
    $input = mysqli_query($con,"UPDATE users SET name='$name', username='$username', email='$email', dateofbirth='$dateofbirth',
    bio='$bio' WHERE id='$id'")or die(mysqli_error($con));

    if($input){
        echo '<div class="notification is-success">Success</div>';
    }else{
        echo '<div class="notification is-danger">Failed</div>';
    } 
    
}else{
    echo '<script>window.history.back()</script>';
}
?>