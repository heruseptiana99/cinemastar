<?php 
    include("connect.php");
    $id_film = $_GET['id_film'];
    $judul_film = $_POST['judul_film'];
    $durasi = $_POST['durasi'];
    $rating = $_POST['rating'];
    $sinopsis = $_POST['sinopsis'];
    $link_trailer = $_POST['link_trailer'];
    $tgl_tayang = $_POST['tgl_tayang'];
    $jenis_tayang = $_POST['jenis_tayang'];

        mysqli_query($conn, "UPDATE film SET judul_film = '$judul_film', durasi = '$durasi', rating='$rating', sinopsis = '$sinopsis', link_trailer = '$link_trailer', tgl_tayang = '$tgl_tayang', jenis_tayang = '$jenis_tayang' WHERE id_film = '$id_film' ");
        header("Location:film.php?alert=berhasil_ubah");
?>