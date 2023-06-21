<?php
    include('connect.php');
    $id_aktor = $_GET['id_aktor'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $foto_lama = $_POST['foto_lama'];

    
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    
    if(!in_array($ext,$ekstensi) ) {
        $result = mysqli_query($conn, "UPDATE `aktor` SET nama = '$nama', tgl_lahir = '$tgl_lahir' WHERE id_aktor = '$id_aktor';");
        header("Location:aktor.php?alert=berhasil_ubah");
    }else{
        if($ukuran < 1044070){
            unlink("images/aktor/$foto_lama");		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'images/aktor/'.$rand.'_'.$filename);
            $result = mysqli_query($conn, "UPDATE `aktor` SET nama = '$nama', tgl_lahir = '$tgl_lahir', foto = '$xx' WHERE id_aktor = '$id_aktor';");

            header("Location:aktor.php?alert=berhasil_ubah");

        }else{
            header("Location:aktor.php?alert=gagal");
        }
    }   
    
?>