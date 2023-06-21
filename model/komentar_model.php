<?php 
    include("../admin/connect.php");
    $id_user = $_POST['id_user'];
    $id_film = $_POST['id_film'];
    $rating = $_POST['rating'];
    $komentar = $_POST['komentar'];

    mysqli_query($conn, "INSERT INTO `komentar` (`id_film`, `id_user`, `rating`, `isi_komentar`, `tgl_komentar`) VALUES ('$id_film', '$id_user', '$rating', '$komentar', ' ". date('Y-m-d H:i:s') ."');");

    header("Location:../film2_detail.php?id_film=$id_film");
?>