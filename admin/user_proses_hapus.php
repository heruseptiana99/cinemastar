<?php 
    include("connect.php");
    $id_user = $_GET['id_user'];
    $foto = $_GET['foto'];

    unlink("images/profile/$foto");		
    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id_user' ");
    mysqli_query($conn, "DELETE FROM komentar WHERE id_user = '$id_user' ");

    header("Location:user.php?alert=hapus");
?>