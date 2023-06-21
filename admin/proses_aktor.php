<?php

    include("connect.php");
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("Location:aktor.php?alert=gagal");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'images/aktor/'.$rand.'_'.$filename);
            $result = mysqli_query($conn, "INSERT INTO `aktor` (`nama`, `tgl_lahir`,`foto`) VALUES ('$nama','$tgl_lahir','$xx');");
            header("Location:aktor.php?alert=berhasil");
        }else{
            header("Location:aktor.php?alert=gagal");
        }
    }
?>