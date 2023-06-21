<?php 
    include("../admin/connect.php");
    $aksi = $_POST['aksi'];
    
    if($aksi == "ubah_profile"){
        $id_user = $_POST['id_user'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $foto_lama = $_POST['foto_lama'];

        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['foto']['name'];
        $ukuran = $_FILES['foto']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!in_array($ext,$ekstensi) ) {
            mysqli_query($conn, "UPDATE user SET nama = '$nama', telp = '$telp', email='$email' WHERE id_user = '$id_user' ");
            header("Location:../profile.php?alert=berhasil_ubah");
        }else{
            if($ukuran < 1044070){
                unlink("../admin/images/profile/$foto_lama");		
                $xx = $rand.'_'.$filename;
                move_uploaded_file($_FILES['foto']['tmp_name'], '../admin/images/profile/'.$rand.'_'.$filename);
                mysqli_query($conn, "UPDATE user SET nama = '$nama', telp = '$telp', email='$email', foto = '$xx' WHERE id_user = '$id_user' ");
    
                header("Location:../profile.php?alert=berhasil_ubah");
    
            }else{
                header("Location:../profile.php?alert=gagal");
            }
        }   
    }elseif ($aksi == "ubah_password") {
        $id_user = $_POST['id_user'];
        $password_lama = $_POST['password_lama'];
        $query = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");
        $result = mysqli_fetch_array($query);
        
        if (password_verify($password_lama, $result['password'])) {
            $password_baru = $_POST['password_baru'];
            $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
            mysqli_query($conn, "UPDATE user SET password = '$password_hash' WHERE id_user = '$id_user' ");
            header("Location:../profile.php?alert=berhasil_ubah");
        }else{
            header("Location:../profile.php?alert=gagal_password");
        }
    }
