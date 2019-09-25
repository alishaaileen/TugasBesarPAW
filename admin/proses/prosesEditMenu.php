<?php 
if(isset($_POST['update'])){
    include('../db.php');

    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $deskripsi = $_POST['deskripsi'];
    $nama_promo = $_POST['nama_promo'];    
 
    // for the database
    $gambarName = time() . '-' . $_FILES["gambar"]["name"];
    
    // For image upload
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($gambarName);
    
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['gambar']['size'] > 200000) {
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
        if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {

            $input = mysqli_query($con,"UPDATE menu SET nama_makanan='$nama_makanan', deskripsi='$deskripsi', gambar='$gambarName', 
            nama_promo='$nama_promo' WHERE id='$id'")or die(mysqli_error($con));

            if($input){
                echo '<script>alert("Menu Has Been Edited!"); window.location = "../dashboard/edelMenu.php"</script>';
            }else{
                echo '<script>alert("Update Failed!"); window.location = "../dashboard/edelMenu.php"</script>';
            }
        }else{
            echo '<script>alert("Upload Picture Failed!"); window.location = "../dashboard/edelMenu.php"</script>';
        }
    }else{
        echo '<script>window.history.back()</script>';
    }
  
}
?>