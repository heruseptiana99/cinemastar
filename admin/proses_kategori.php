<?php
    $nama_kategori = $_POST['nama_kategori'];
    

    include("connect.php");
    $result = mysqli_query($conn, "INSERT INTO `kategori` (`nama_kategori`) 
    VALUES ('$nama_kategori');");
    
    header("Location:kategori.php");
?>