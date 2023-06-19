<?php
     include("connect.php");
     $id_komentar = $_GET['id_komentar'];
 
     $result = mysqli_query($conn, "DELETE FROM komentar WHERE id_komentar = '$id_komentar'");
 
     header("Location:komentar.php?alert=hapus");
?>