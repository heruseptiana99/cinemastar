<?php
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $foto = $_POST['foto'];

    include("connect.php");
    $result = mysqli_query($conn, "INSERT INTO `aktor` (`nama`, `tgl_lahir`,`foto`) 
    VALUES ('$nama' ,'$tgl_lahir','$foto');");
    
    header("Location:aktor.php");
?>