<!DOCTYPE php>
<php lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

        <!-- Custom fonts for this template -->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    
        <!-- Custom styles for this page -->
        <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <style>
          .btn-tema{
            background-color: #e97770 ;
            color: white;
          }
        </style>
</head>

<body id="page-top" >

  <div class="container">
    <div class="card mt-3 border border-dark rounded-0">
      <div class="card-body m-0 p-0">
            <div class="row align-items-center">
              <div class="col-5 p-4 m-4">
              <h3 class="mb-2"><b>DAFTAR || <a href="index.php" style="text-decoration:none; color: #e97770;">CINEMASTAR</a></b></h3>
              <form action="model/beranda_model.php" method="POST" id="form-pelanggan" enctype="multipart/form-data">
                        <input type="hidden" name="aksi" value="daftar">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap">
                            <small id="text-error-nama"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <small id="text-error-email"></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="password">
                            <small id="text-error-password"></small>
                        </div>
                        <div class="form-group">
                            <label for="ulang_password">Ulang Password</label>
                            <input type="password" class="form-control" id="ulang_password" name="ulang_password" placeholder="ulang Password">
                            <small id="text-error-ulang_password"></small>
                        </div>
                <div class="form-group">
                  <label class="form-check-label">Sudah punya akun? <a href="login.php">Klik link disini!</a></label>
                </div>
                <button id="my-button" type="button"class="btn btn-tema btn-block">MASUK</button>
              </form>
              </div>
              <div class="col align-self-start">
                <img src="images/dg.jpeg" alt="" width="100%">
              </div>
            </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#nama').val().length == 0 || $('#password').val().length == 0 || $('#email').val().length == 0  || $('#ulang_password').val().length == 0 || $('#password').val().length !== $('#ulang_password').val().length) {
            if($('#nama').val().length == 0){
                $('#nama').css({"border-color" : "red"});
                $('#text-error-nama').text('* Silahkan isi nama terlebih dahulu');
                $('#text-error-nama').css({"font-style" : "italic"});
                $('#text-error-nama').css({"color" : "red"});
            }else{
                $('#nama').css({"border-color" : "#dee2e6"});
                $('#text-error-nama').hide();
            }
            if($('#email').val().length == 0){
                $('#email').css({"border-color" : "red"});
                $('#text-error-email').text('* Silahkan isi email terlebih dahulu');
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
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</php>