<?php 
if(isset($_POST['update'])){
    include('../process/db.php');
    
    $id = $_POST['id'];
    $password = $_POST['password'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $old_password) {
        if($new_password === $confirm_password){
            $input = mysqli_query($con,"UPDATE users SET password='$new_password' WHERE id='$id'")or die(mysqli_error($con));
            echo '<div class="notification is-success">Success</div>';
        }else{
            echo '<div class="notification is-danger">Invalid Password</div>';
        }
     }
     else {
        echo '<div class="notification is-danger">Invalid Password</div>';
     }
    
}else{
    echo '<script>window.history.back()</script>';
}
?>