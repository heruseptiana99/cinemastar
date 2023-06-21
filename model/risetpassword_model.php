<?php 
    include("../admin/connect.php");
    $id_user = $_POST['id_user'];
    $password = $_POST['password'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "UPDATE user SET password = '$password_hash' WHERE id_user = '$id_user' ");
    header("Location:../login.php?alert=berhasil_riset");


    


?>