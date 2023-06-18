<?php 
    include("connect.php");
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("Location:user.php?alert=gagal");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'images/profile/'.$rand.'_'.$filename);
            mysqli_query($conn, "INSERT INTO `user` (`nama`, `telp`, `email`, `password`, `role`, `foto`) VALUES ('$nama', '$telp', '$email', '$password_hash', '$role', '$xx');");

            header("Location:user.php?alert=berhasil");

        }else{
            header("Location:user.php?alert=gagal");
        }
    }   
    


?>