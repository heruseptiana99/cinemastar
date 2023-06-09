<?php
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];

    include("connect.php");
    $result = mysqli_query($conn, "INSERT INTO `sutradara` (`nama`, `tgl_lahir`) 
    VALUES ('$nama' ,'$tgl_lahir');");
    
    header("Location:sutradara.php");
?>