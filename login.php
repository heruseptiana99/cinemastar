<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membuat Form Login</title>
  <link rel="stylesheet" href="assets/css/login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Form Login</div>
        <div class="title signup">Form Registrasi</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="index.html" class="login">
            <pre>
            </pre>
            <div class="field">
              <input type="text" placeholder="Masukan Email " required>
            </div>
            <div class="field">
              <input type="password" placeholder="Masukan Password" required>
            </div>
            <div class="pass-link"><a href="#">Lupa password?</a></div>
            <div class="field btn">
              
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
          </form>
          <form class="signup" action="user_proses_tambah.php" method="POST" id="form-pelanggan" enctype="multipart/form-data">
            <div class="field">
              <input type="text" id="nama" name="nama" placeholder="Masukan Nama">
              <small id="text-error-nama"></small>
            </div>
            <div class="field">
              <input type="text" id="email" name="email" placeholder="Masukan Email">
              <small id="text-error-nama"></small>
            </div>
            <div class="field">
              <input type="password" id="password" name="password" placeholder="Masukan Password">
              <small id="text-error-password"></small>
            </div>
            <div class="field">
              <input type="password" id="ulang_password" name="ulang_password" placeholder="Ulangi password">
              <small id="text-error-email"></small>
            </div>
            <button id="my-button" type="button">DAFTAR</button>
            <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#nama').val().length == 0 || $('#password').val().length == 0 || $('#email').val().length == 0 || $('#ulang_password').val().length == 0 || $('#password').val().length !== $('#ulang_password').val().length) {
            if($('#nama').val().length == 0){
                $('#nama').css({"border-color" : "red"});
                $('#text-error-nama').text('* Silahkan isi nama terlebih dahulu');
                $('#text-error-nama').css({"font-style" : "italic"});
                $('#text-error-nama').css({"color" : "red"});
            }else{
                $('#nama').css({"border-color" : "#dee2e6"});
                $('#text-error-nama').hide();
            }
            if($('#telp').val().length == 0){
                $('#telp').css({"border-color" : "red"});
                $('#text-error-telp').text('* Silahkan isi telp terlebih dahulu');
                $('#text-error-telp').css({"font-style" : "italic"});
                $('#text-error-telp').css({"color" : "red"});
            }else{
                $('#telp').css({"border-color" : "#dee2e6"});
                $('#text-error-telp').hide();
            }
            if($('#foto').val().length == 0){
                $('#foto').css({"border-color" : "red"});
                $('#text-error-foto').text('* Silahkan isi foto terlebih dahulu');
                $('#text-error-foto').css({"font-style" : "italic"});
                $('#text-error-foto').css({"color" : "red"});
            }else{
                $('#foto').css({"border-color" : "#dee2e6"});
                $('#text-error-foto').hide();
            }
            if($('#email').val().length == 0){
                $('#email').css({"border-color" : "red"});
                $('#text-error-email').text('* Silahkan isi emnail terlebih dahulu');
                $('#text-error-email').css({"font-style" : "italic"});
                $('#text-error-email').css({"color" : "red"});
            }else{
                $('#email').css({"border-color" : "#dee2e6"});
                $('#text-error-email').hide();
            }
            if($('#password').val().length == 0){
                $('#password').css({"border-color" : "red"});
                $('#text-error-password').text('* Silahkan isi password terlebih dahulu');
                $('#text-error-password').css({"font-style" : "italic"});
                $('#text-error-password').css({"color" : "red"});
            }else{
                if ($('#password').val().length !== $('#ulang_password').val().length) {
                    $('#password').css({"border-color" : "red"});
                    $('#text-error-password').text('* password tidak sama dengan ulang password');
                    $('#text-error-password').css({"font-style" : "italic"});
                    $('#text-error-password').css({"color" : "red"});
                }else{
                    $('#password').css({"border-color" : "#dee2e6"});
                    $('#text-error-password').hide();
                }
            }
            if($('#ulang_password').val().length == 0){
                $('#ulang_password').css({"border-color" : "red"});
                $('#text-error-ulang_password').text('* Silahkan isi ulang password terlebih dahulu');
                $('#text-error-ulang_password').css({"font-style" : "italic"});
                $('#text-error-ulang_password').css({"color" : "red"});
            }else{
                $('#ulang_password').css({"border-color" : "#dee2e6"});
                $('#text-error-ulang_password').hide();
            }
           
        } else {
                $('#form-pelanggan').submit();
        }
    });
    </script>
  <script  src="assets/js/login.js"></script>

</body>
</html>
