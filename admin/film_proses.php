<?php 
    include("connect.php");
    $id_film = $_GET['id_film'];
    $aksi = $_POST['aksi'];
    $aksi_get = $_GET['aksi'];


    if ($aksi == "tambah_kategori") {
        $id_kategori = $_POST['id_kategori'];
        mysqli_query($conn, "INSERT INTO `kategori_film`(`id_kategori`, `id_film`) VALUES ('$id_kategori','$id_film');");
        header("Location:film_ubah.php?id_film=$id_film" . "&alert=berhasil");
        
    }elseif ($aksi == "tambah_sutradara") {
        $id_sutradara = $_POST['id_sutradara'];
        mysqli_query($conn, "INSERT INTO `sutradara_film`(`id_film`, `id_sutradara`) VALUES ('$id_film','$id_sutradara');");
        header("Location:film_ubah.php?id_film=$id_film" . "&alert=berhasil");
        
    }elseif ($aksi == "tambah_aktor") {
        $id_aktor = $_POST['id_aktor'];
        $nama_pemeran = $_POST['nama_pemeran'];
        mysqli_query($conn, "INSERT INTO `aktor_film`(`id_film`, `id_aktor`, `nama_pemeran`) VALUES ('$id_film','$id_aktor','$nama_pemeran');");
        header("Location:film_ubah.php?id_film=$id_film" . "&alert=berhasil");
        
    }elseif ($aksi == "tambah_foto") {
        $status = $_POST['status'];
        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['foto_film']['name'];
        $ukuran = $_FILES['foto_film']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto_film']['tmp_name'], 'images/produk/'.$rand.'_'.$filename);
        mysqli_query($conn, "INSERT INTO `foto_film`(`id_film`, `foto`, `status`) VALUES ('$id_film','$xx','$status');");
        header("Location:film_ubah.php?id_film=$id_film" . "&alert=berhasil");
        
    }elseif($aksi_get == "hapus_kategori"){
        $id_kategori_film = $_GET['id_kategori_film'];
        mysqli_query($conn, "DELETE FROM kategori_film WHERE id_kategori_film = '$id_kategori_film' ");
        header("Location:film_ubah.php?id_film=$id_film" . "&alert=hapus");

    }elseif($aksi_get == "hapus_sutradara"){
        $id_sutradara_film = $_GET['id_sutradara_film'];
        mysqli_query($conn, "DELETE FROM sutradara_film WHERE id_sutradara_film = '$id_sutradara_film' ");
        header("Location:film_ubah.php?id_film=$id_film" . "&alert=hapus");

    }elseif($aksi_get == "hapus_aktor"){
        $id_aktor_film = $_GET['id_aktor_film'];
        mysqli_query($conn, "DELETE FROM aktor_film WHERE id_aktor_film = '$id_aktor_film' ");
        header("Location:film_ubah.php?id_film=$id_film" . "&alert=hapus");

    }elseif($aksi_get == "hapus_foto"){
        $id_foto_film = $_GET['id_foto_film'];
        mysqli_query($conn, "DELETE FROM foto_film WHERE id_foto_film = '$id_foto_film' ");
        header("Location:film_ubah.php?id_film=$id_film" . "&alert=hapus");

    }
