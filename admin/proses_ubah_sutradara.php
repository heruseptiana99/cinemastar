<?php
    include("connect.php");
    $id_sutradara = $_GET['id_sutradara'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $result = mysqli_query($conn, "UPDATE sutradara SET id_sutradara = '$id_sutradara',
    nama = '$nama', tgl_lahir = '$tgl_lahir' WHERE id_sutradara = '$id_sutradara';");
    header("Location:sutradara.php?alert=berhasil_ubah");
   
?>