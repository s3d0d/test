<?php

include("Conn.php");

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $SECTION = $_POST['section'];

    $IMAGE = $_FILES['image'];
    $IMAGE_LOCATION = $_FILES['image']['tmp_name'];
    $IMAGE_NAME = $_FILES['image']['name'];
    $IMAGE_UP = "Img_Pro/".$IMAGE_NAME;

    $INSERT = "INSERT INTO tb_product (name , section , image) VALUES ('$NAME' , '$SECTION ' , '$IMAGE_UP')";
    mysqli_query($conn, $INSERT);

    if(move_uploaded_file($IMAGE_LOCATION, 'Img_Pro/'.$IMAGE_NAME)){
        echo "<script> alert('تم رفع المنتج بنجاح') </script>";
    }
    else{
        echo "<script> alert('حدث خطأ لم يتم رفع المنتج') </script>";
    }

    header('location: Add-Product.php');
}

?>