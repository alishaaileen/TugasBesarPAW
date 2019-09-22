<?php 
if(isset($_POST['update'])){
    include('../process/db.php');
    
    $id = $_POST['id'];
    $password = $_POST['password'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
     if (password_verify($old_password, $password)) {
        if($new_password === $confirm_password){
            $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
            $input = mysqli_query($con,"UPDATE user SET password='$new_password' WHERE id='$id'")or die(mysqli_error($con));
            echo '<script>alert("Success!"); window.location = "../content/profile.php"</script>';
        }else{
            echo '<script>alert("Confirmation Password Invalid!"); window.location = "../content/profile.php"</script>"</script>';
        }
    } else {
        echo '<script>alert("Old Password Input Invalid!");window.location = "../content/profile.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>