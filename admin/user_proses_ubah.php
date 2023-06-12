<?php 
    include("connect.php");
    $id_user = $_GET['id_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $foto_lama = $_POST['foto_lama'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if($password){
        mysqli_query($conn, "UPDATE user SET password = '$password_hash' WHERE id_user = '$id_user' ");
        header("Location:user.php?alert=berhasil_ubah");
    }

    if(!in_array($ext,$ekstensi) ) {
        mysqli_query($conn, "UPDATE user SET nama = '$nama', telp = '$telp', email='$email', role = '$role' WHERE id_user = '$id_user' ");
        header("Location:user.php?alert=berhasil_ubah");
    }else{
        if($ukuran < 1044070){
            unlink("images/profile/$foto_lama");		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'images/profile/'.$rand.'_'.$filename);
            mysqli_query($conn, "UPDATE user SET nama = '$nama', telp = '$telp', email='$email', role = '$role', foto = '$xx' WHERE id_user = '$id_user' ");

            header("Location:user.php?alert=berhasil_ubah");

        }else{
            header("Location:user.php?alert=gagal");
        }
    }   
    
    


?>