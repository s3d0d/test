<?php

include("Conn.php");

if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $SECTION = $_POST['section'];

    $IMAGE = $_FILES['image'];
    $IMAGE_LOCATION = $_FILES['image']['tmp_name'];
    $IMAGE_NAME = $_FILES['image']['name'];
    $IMAGE_UP = "Img_Pro/".$IMAGE_NAME;
    $IPDATE = "UPDATE tb_product SET name = '$NAME' , section = '$SECTION' , image = '$IMAGE_UP' WHERE id = $ID " ;

    mysqli_query($conn, $IPDATE);

    if(move_uploaded_file($IMAGE_LOCATION, 'Img_Pro/'. $IMAGE_NAME)){
        echo "<script> alert('تم رفع المنتج بنجاح'); </script>";
    }
    else{
        echo "<script> alert('حدث خطأ لم يتم رفع المنتج'); </script>";
    }

    header('location: Sections.php');
}

?>