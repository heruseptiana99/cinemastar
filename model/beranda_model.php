<?php 
    include("../admin/connect.php");
    $aksi_post = $_POST['aksi'];
    $aksi_get = $_GET['aksi'];

    if($aksi_post == "daftar"){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $data_foto = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
        $i=0;
        while($foto = mysqli_fetch_array($data_foto)) {
            $i= 1 + $i;
        }
        if($i==0){
            mysqli_query($conn, "INSERT INTO `user` (`nama`, `telp`, `email`, `password`, `role`, `foto`) VALUES ('$nama', '0', '$email', '$password_hash', 'User', 'default.png');");
            header("Location:../login.php?alert=berhasil");
        }else{
            header("Location:../login.php?alert=gagal_email_sudah_ada");
        }
    }elseif($aksi_post == "login"){
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
        $result = mysqli_fetch_array($query);
    
        if ($result!=0) {
            if (password_verify($password, $result['password'])) {
                $_SESSION['email'] = $result['email'];
                $_SESSION['role'] = $result['role'];
                $_SESSION['nama'] = $result['nama'];
                if($result['role']=="Admin"){
                    header("Location:../admin/index.php");
                }else{
                    header("Location:../index.html");
                }
            }else{
                header("Location:../login.php?alert=gagal_login");
            }
        }else{
            header("Location:../login.php?alert=gagal_login");
        }
    }elseif($aksi_get == "logout"){
        session_start();
        session_destroy();
        
        header("Location: ../login.php?alert=logout");
    }