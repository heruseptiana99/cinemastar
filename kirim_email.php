<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//ini sesuaikan foldernya ke file 3 ini
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


       //sesuaikan name dengan di form nya ya 
    $email = $_POST['email'];
    include("admin/connect.php");
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
    $result = mysqli_fetch_array($query);

    if ($result!=0) {
        $id_user = $result['id_user'];
        $kode_cinemastar = "jsdfisgifuiisbfsbiuouudgfsifo887";
        $judul = "Cinemastar - [RISET PASSWORD]";
        $pesan = "Halo " .$result['nama'] . ", Untuk meriset password anda cukup, <a href='http://localhost:8080/cinemastar/riset_password.php?kode=". $kode_cinemastar ."&id_user=". $id_user ."'>Klik link disini!</a>";
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'heruseptianaxrpl2@gmail.com';                     //SMTP username
            $mail->Password   = 'xjlquzihiibsuxri';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //pengirim
            $mail->setFrom('heruseptianaxrpl2@gmail.com', 'heruseptianaxrpl2@gmail.com');
            $mail->addAddress($email);     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $judul;
            $mail->Body    = $pesan;
            $mail->AltBody = '';
            //$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
            //$mail->addAttachment(''); 

            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

        }
                //redirect ke halaman index.php
                // echo "<script>alert('Email berhasil terkirim!');window.location='index.php';</script>";
                header("Location:login.php?alert=email_terkirim");

                
    }else{
        header("Location:lupa_password.php?alert=gagal_email_tidak_terdafar");
    }
    
    ?>