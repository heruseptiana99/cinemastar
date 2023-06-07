<?php
     include("connect.php");
     $id_sutradara = $_GET['id_sutradara'];
 
     $result = mysqli_query($conn, "DELETE FROM sutradara WHERE id_sutradara = '$id_sutradara'");
 
     header("Location:sutradara.php");
?>