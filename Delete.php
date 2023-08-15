<?php

include('Conn.php');

$ID = $_GET['id'];
mysqli_query($conn, "DELETE FROM tb_product WHERE id=$ID");
header('location: Sections.php');

?>