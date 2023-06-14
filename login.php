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
              <h3><b>MASUK || <a href="index.html" style="text-decoration:none; color: #e97770;">CINEMASTAR</a></b></h3><br>
              <?php 
                  if(isset($_GET['alert'])){
                    if ($_GET['alert'] == "berhasil") {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Berhasil</strong>, Anda berhasil daftar, Silahkan Login!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    }elseif($_GET['alert'] == "gagal_email_sudah_ada"){
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Gagal</strong>, Email anda sudah terdaftar!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    }elseif($_GET['alert'] == "gagal_login"){
                      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                          <strong>Gagal</strong>, Email atau password anda salah!
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                          </button>
                      </div>";
                  }elseif($_GET['alert'] == "logout"){
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Berhasil</strong>, Anda berhasil logout!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    }
                }
              ?>
              <form action="model/beranda_model.php" method="POST" id="form-pelanggan" enctype="multipart/form-data">
                <input type="hidden" name="aksi" value="login">
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                  <small id="text-error-email"></small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    <small id="text-error-password"></small>
                </div>
                <div class="form-group">
                  <label class="form-check-label">Belum punya akun? <a href="daftar.php">Klik link disini!</a></label>
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
        if ($('#password').val().length == 0 || $('#email').val().length == 0) {
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
                    $('#password').css({"border-color" : "#dee2e6"});
                    $('#text-error-password').hide();
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