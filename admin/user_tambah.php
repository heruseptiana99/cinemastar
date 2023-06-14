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
        <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    
        <!-- Custom styles for this page -->
        <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #e97770;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cinemastar </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>

            <!-- Nav Item - User -->
            <li class="nav-item active">
                <a class="nav-link " href="user.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>User</span></a>
                </li>
                
                <!-- Nav Item - Aktor -->
                <li class="nav-item">
                    <a class="nav-link" href="aktor.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Aktor</span></a>
                </li>
    
                <!-- Nav Item - Sutradara -->
                <li class="nav-item">
                    <a class="nav-link" href="sutradara.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Sutradara</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="komentar.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Komentar</span></a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Film
            </div>

            <!-- Nav Item - Film -->
            <li class="nav-item">
                <a class="nav-link" href="film.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Film</span></a>
            </li>


            <!-- Nav Item - Kategori -->
            <li class="nav-item">
                <a class="nav-link" href="kategori.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kategori</span></a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Heru</span>
                                <img class="img-profile rounded"
                                    src="images/user1.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">TAMBAH USER</h1>
                    </div>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                        </div>
                        <div class="card-body">
                        <form action="user_proses_tambah.php" method="POST" id="form-pelanggan" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap">
                            <small id="text-error-nama"></small>
                        </div>
                        <div class="form-group">
                            <label for="Telpon">Telepon</label>
                            <input type="text" class="form-control" id="telp" name="telp" placeholder="Telpon">
                            <small id="text-error-telp"></small>
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
                            <input type="password" class="form-control" id="ulang_password" name="ulang_password" placeholder="Ulang Password">
                            <small id="text-error-ulang_password"></small>
                        </div>
                        <div class="form-group">
                            <label for="Role">Role</label>
                            <select class="form-control" id="Role" name="role">
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" placeholder="Foto">
                            <small id="text-error-foto"></small>
                        </div>
                            <button id="my-button" type="button" class="btn btn-primary mt-3">Tambah User</button>
                            <a href="user.php" class="btn btn-danger mt-3">Batal</a>
                        </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kelompok 1 Eduwork Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#nama').val().length == 0 || $('#password').val().length == 0 || $('#email').val().length == 0  || $('#telp').val().length == 0  || $('#foto').val().length == 0  || $('#ulang_password').val().length == 0 || $('#password').val().length !== $('#ulang_password').val().length) {
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
   
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>

</body>

</php>