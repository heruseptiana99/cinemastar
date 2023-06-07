<?php
    include('connect.php');
    $id_aktor = $_GET['id_aktor'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $foto = $_POST['foto'];

    $result = mysqli_query($conn, "UPDATE `aktor` SET 
    nama = '$nama', tgl_lahir = '$tgl_lahir', foto = '$foto' WHERE id_aktor = '$id_aktor';");
    header("Location:aktor.php");
?>