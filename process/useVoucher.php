<?php if(isset($_GET['id'])){
    include('../process/db.php'); 
 
    $id = $_GET['id'];
    $delete = mysqli_query($con,"DELETE FROM vouchers WHERE id='$id'")or die(mysqli_error($con));
    if($delete){
        echo '<script>alert("success"); window.location = "../content/order_show.php"</script>';
    }else{
        echo '<script>alert("failed"); window.location = "../content/order_show.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}

?> 