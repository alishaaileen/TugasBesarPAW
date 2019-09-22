
<?php
if (isset($_POST['save_profile'])) {
    include('../process/db.php');
    
    $id = $_POST['id'];
    // for the database
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    
    // For image upload
    $target_dir = "../images/";
    $target_file = $target_dir . basename($profileImageName);
    
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
   
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        
        $input = mysqli_query($con, "UPDATE user SET profile_image='$profileImageName' WHERE id='$id'") or die(mysqli_error($con));

        if($input){
            echo '<script>alert("Profile Has Been Edited!"); window.location = "../content/profile.php"</script>';
        }else{
            echo '<script>alert("Update Failed!");<script>window.location = "../content/profile.php"</script>';
        }
      } else {
        echo '<script>alert("Uploading Failed!");<script>window.location = "../content/profile.php"</script>';
      }
    }
  }else{
    echo '<script>window.history.back()</script>';
}
?>