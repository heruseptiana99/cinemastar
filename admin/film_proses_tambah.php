<?php 
    include("connect.php");
    $judul_film = $_POST['judul_film'];
    $durasi = $_POST['durasi'];
    $rating = $_POST['rating'];
    $sinopsis = $_POST['sinopsis'];
    $link_trailer = $_POST['link_trailer'];
    $tgl_tayang = $_POST['tgl_tayang'];
    $jenis_tayang = $_POST['jenis_tayang'];

    mysqli_query($conn, "INSERT INTO `film`(`judul_film`, `durasi`, `rating`, `sinopsis`, 
    `link_trailer`, `tgl_tayang`, `jenis_tayang`) VALUES ('$judul_film','$durasi','$rating','$sinopsis','$link_trailer','$tgl_tayang','$jenis_tayang');");

    $data_film = mysqli_query($conn, "SELECT MAX(Id_film) as id_film_baru FROM film");
    while($film = mysqli_fetch_array($data_film)) {
        $id_film_baru = $film['id_film_baru'];
    }
    header("Location:film_ubah.php?id_film=$id_film_baru");
?>