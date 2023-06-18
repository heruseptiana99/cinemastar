<?php 
    include("connect.php");
    $id_film = $_GET['id_film'];

    mysqli_query($conn, "DELETE FROM foto_film WHERE id_film = '$id_film' ");
    mysqli_query($conn, "DELETE FROM aktor_film WHERE id_film = '$id_film' ");
    mysqli_query($conn, "DELETE FROM sutradara_film WHERE id_film = '$id_film' ");
    mysqli_query($conn, "DELETE FROM kategori_film WHERE id_film = '$id_film' ");
    mysqli_query($conn, "DELETE FROM film WHERE id_film = '$id_film' ");
    
    header("Location:film.php?alert=hapus");



?>