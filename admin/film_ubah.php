<?php session_start() ?>
<!DOCTYPE php>
<php lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cinemastar - Film</title>

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
        <ul class="navbar-nav sidebar sidebar-dark toggled" style="background-color: #e97770;" id="toggledSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
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
            <li class="nav-item ">
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

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Film
            </div>

            <!-- Nav Item - Film -->
            <li class="nav-item active">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama'] ?></span>
                                <img class="img-profile rounded"
                                    src="<?php if($_SESSION['foto']=="default.png"){echo "../images/default.png";}else{ echo "images/profile/".$_SESSION['foto'];} ?>">
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
                    <?php
                        include ('connect.php');
                        $id_film = $_GET['id_film'];

                        $data_film = mysqli_query($conn, "SELECT * FROM film where id_film='$id_film'");
                        while ($film = mysqli_fetch_array($data_film)) {
                            $judul_film = $film['judul_film'];
                            $durasi = $film['durasi'];
                            $rating = $film['rating'];
                            $sinopsis = $film['sinopsis'];
                            $link_trailer = $film['link_trailer'];
                            $tgl_tayang = $film['tgl_tayang'];
                            $jenis_tayang = $film['jenis_tayang'];

                        }
                    ?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">DETAIL FILM</h1>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ubah Film</h6>
                                </div>
                                <div class="card-body">
                                <form action="film_proses_ubah.php?id_film=<?= $id_film ?>" method="POST" id="form-pelanggan" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="judul_film">Judul Film</label>
                                    <input type="text" class="form-control" id="judul_film" name="judul_film" value="<?= $judul_film ?>" placeholder="Judul Film">
                                    <small id="text-error-judul_film"></small>
                                </div>
                                <div class="form-group">
                                    <label for="durasi">Durasi</label>
                                    <br>
                                    <small><i>*satuan menit</i></small>
                                    <input type="number" class="form-control" id="durasi" name="durasi" value="<?= $durasi ?>" placeholder="Durasi">
                                    <small id="text-error-durasi"></small>
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <select class="form-control" id="rating" name="rating">
                                        <option value="SU" <?php if($rating=="SU"){ echo "selected";} ?>>SU</option>
                                        <option value="BO" <?php if($rating=="BO"){ echo "selected";} ?>>BO</option>
                                        <option value="BO +4" <?php if($rating=="BO +4"){ echo "selected";} ?>>BO +4</option>
                                        <option value="BO +13" <?php if($rating=="BO +13"){ echo "selected";} ?>>BO +13</option>
                                        <option value="D" <?php if($rating=="D"){ echo "selected";} ?>>D</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_tayang">Jenis Tayang</label>
                                    <select class="form-control" id="jenis_tayang" name="jenis_tayang">
                                        <option value="Tayang hari ini" <?php if($jenis_tayang == "Tayang hari ini"){ echo "selected";} ?>>Tayang hari ini</option>
                                        <option value="Coming soon" <?php if($jenis_tayang == "Coming soon"){ echo "selected";} ?>>Coming soon</option>
                                        <option value="Tidak tayang" <?php if($jenis_tayang == "Tidak tayang"){ echo "selected";} ?>>Tidak tayang</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="link_trailer">Link Trailer</label>
                                    <input type="text" class="form-control" id="link_trailer" name="link_trailer" value="<?= $link_trailer ?>" placeholder="Link Trailer">
                                    <small id="text-error-link_trailer"></small>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_tayang">Tanggal Tayang</label>
                                    <input type="date" class="form-control" id="tgl_tayang" value="<?= $tgl_tayang ?>" name="tgl_tayang" >
                                    <small id="text-error-tgl_tayang"></small>
                                </div>
                                <div class="form-group">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea name="sinopsis" id="sinopsis" class="form-control" rows="10"><?= $sinopsis ?></textarea>
                                    <small id="text-error-sinopsis"></small>
                                </div>
                                    <button id="my-button" type="button" class="btn btn-primary mt-3">Ubah Film</button>
                                    <a href="film.php" class="btn btn-danger mt-3">Batal</a>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                        <?php 

                            $id_film = $_GET['id_film'];
                        
                        ?>
                            <!-- DATA KATEGORI -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                                </div>
                                <div class="card-body">
                                    <a href="film_tambah_kategori.php?id_film=<?= $id_film ?>" class="btn btn-primary mb-2">Tambah Kategori</a>
                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th style="width: 30px;">No</th>
                                                    <th>Kategori</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $data_kategori = mysqli_query($conn, "SELECT * FROM kategori_film INNER JOIN kategori ON kategori.id_kategori = kategori_film.id_kategori WHERE id_film=$id_film");
                                                $i=0;
                                                while($kategori = mysqli_fetch_array($data_kategori)) {
                                            ?>
                                                <tr>
                                                    <td  class="text-center"><?= $i = $i+1 ?></td>
                                                    <td  class="text-center"><?= $kategori['nama_kategori'] ?></td>
                                                    <td>
                                                        <a href="film_proses.php?id_film=<?= $id_film ?>&id_kategori_film=<?= $kategori['id_kategori_film'] ?>&aksi=hapus_kategori" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Yakin dihapus, data yang ber-relasi juga akan terhapus!')">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                            <?php
                                                if($i==0){
                                                    echo "<td colspan='3' class='text-center'><i>*data kosong, wajib di-isi setidaknya 1 data</i></td>";
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- DATA SUTRADARA -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Sutradara</h6>
                                </div>
                                <div class="card-body">
                                    <a href="film_tambah_sutradara.php?id_film=<?= $id_film ?>" class="btn btn-primary mb-2">Tambah Sutradara</a>
                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <thead>
                                                <tr  class="text-center">
                                                    <th  style="width: 30px;">No</th>
                                                    <th>Sutradara</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $data_sutradara = mysqli_query($conn, "SELECT * FROM sutradara_film INNER JOIN sutradara ON sutradara.id_sutradara = sutradara_film.id_sutradara WHERE id_film=$id_film");
                                                $i=0;
                                                while($sutradara = mysqli_fetch_array($data_sutradara)) {
                                            ?>
                                                <tr>
                                                    <td  class="text-center"><?= $i = $i+1 ?></td>
                                                    <td  class="text-center"><?= $sutradara['nama'] ?></td>
                                                    <td>
                                                        <a href="film_proses.php?id_film=<?= $id_film ?>&id_sutradara_film=<?= $sutradara['id_sutradara_film'] ?>&aksi=hapus_sutradara" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Yakin dihapus, data yang ber-relasi juga akan terhapus!')">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                            <?php
                                                if($i==0){
                                                    echo "<td colspan='3' class='text-center'><i>*data kosong, wajib di-isi setidaknya 1 data</i></td>";
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- DATA AKTOR -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Aktor</h6>
                                </div>
                                <div class="card-body">
                                    <a href="film_tambah_aktor.php?id_film=<?= $id_film ?>" class="btn btn-primary mb-2">Tambah Aktor</a>
                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th  style="width: 30px;">No</th>
                                                    <th>Aktor</th>
                                                    <th>Pemeran</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $data_aktor = mysqli_query($conn, "SELECT * FROM aktor_film INNER JOIN aktor ON aktor.id_aktor = aktor_film.id_aktor WHERE id_film=$id_film");
                                                $i=0;
                                                while($aktor = mysqli_fetch_array($data_aktor)) {
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?= $i = $i+1 ?></td>
                                                    <td class="text-center"><?= $aktor['nama'] ?></td>
                                                    <td class="text-center"><?= $aktor['nama_pemeran'] ?></td>
                                                    <td>
                                                        <a href="film_proses.php?id_film=<?= $id_film ?>&id_aktor_film=<?= $aktor['id_aktor_film'] ?>&aksi=hapus_aktor" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Yakin dihapus, data yang ber-relasi juga akan terhapus!')">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                            <?php
                                                if($i==0){
                                                    echo "<td colspan='4' class='text-center'><i>*data kosong, wajib di-isi setidaknya 1 data</i></td>";
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <!-- DATA FOTO -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Foto</h6>
                                </div>
                                <div class="card-body">
                                    <a href="film_tambah_foto.php?id_film=<?= $id_film ?>" class="btn btn-primary mb-2">Tambah Foto</a>
                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th style="width: 30px;">No</th>
                                                    <th>Foto</th>
                                                    <!-- <th>Status</th> -->
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $data_foto = mysqli_query($conn, "SELECT * FROM foto_film  WHERE id_film=$id_film");
                                                $i=0;
                                                while($foto = mysqli_fetch_array($data_foto)) {
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?= $i = $i+1 ?></td>
                                                    <td class="text-center"><img src="images/produk/<?= $foto['foto'] ?>" alt="" width="150px"></td>
                                                    <td>
                                                        <a href="film_proses.php?id_film=<?= $id_film ?>&id_foto_film=<?= $foto['id_foto_film'] ?>&aksi=hapus_foto" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Yakin dihapus, data yang ber-relasi juga akan terhapus!')">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                            <?php
                                                if($i==0){
                                                    echo "<td colspan='4' class='text-center'><i>*data kosong, wajib di-isi setidaknya 1 data</i></td>";
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

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
                    <a class="btn btn-primary" href="../model/beranda_model.php?aksi=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#judul_film').val().length == 0 || $('#durasi').val().length == 0 || $('#link_trailer').val().length == 0  || $('#tgl_tayang').val().length == 0  || $('#sinopsis').val().length == 0 ) {
            if($('#judul_film').val().length == 0){
                $('#judul_film').css({"border-color" : "red"});
                $('#text-error-judul_film').text('* Silahkan isi Judul Film terlebih dahulu');
                $('#text-error-judul_film').css({"font-style" : "italic"});
                $('#text-error-judul_film').css({"color" : "red"});
            }else{
                $('#judul_film').css({"border-color" : "#dee2e6"});
                $('#text-error-judul_film').hide();
            }
            if($('#durasi').val().length == 0){
                $('#durasi').css({"border-color" : "red"});
                $('#text-error-durasi').text('* Silahkan isi Durasi terlebih dahulu');
                $('#text-error-durasi').css({"font-style" : "italic"});
                $('#text-error-durasi').css({"color" : "red"});
            }else{
                $('#durasi').css({"border-color" : "#dee2e6"});
                $('#text-error-durasi').hide();
            }
            if($('#tgl_tayang').val().length == 0){
                $('#tgl_tayang').css({"border-color" : "red"});
                $('#text-error-tgl_tayang').text('* Silahkan isi Tanggal tayang terlebih dahulu');
                $('#text-error-tgl_tayang').css({"font-style" : "italic"});
                $('#text-error-tgl_tayang').css({"color" : "red"});
            }else{
                $('#tgl_tayang').css({"border-color" : "#dee2e6"});
                $('#text-error-tgl_tayang').hide();
            }
            if($('#link_trailer').val().length == 0){
                $('#link_trailer').css({"border-color" : "red"});
                $('#text-error-link_trailer').text('* Silahkan isi Link trailer terlebih dahulu');
                $('#text-error-link_trailer').css({"font-style" : "italic"});
                $('#text-error-link_trailer').css({"color" : "red"});
            }else{
                $('#link_trailer').css({"border-color" : "#dee2e6"});
                $('#text-error-link_trailer').hide();
            }
            if($('#sinopsis').val().length == 0){
                $('#sinopsis').css({"border-color" : "red"});
                $('#text-error-sinopsis').text('* Silahkan isi Sinopsis terlebih dahulu');
                $('#text-error-sinopsis').css({"font-style" : "italic"});
                $('#text-error-sinopsis').css({"color" : "red"});
            }else{
                $('#sinopsis').css({"border-color" : "#dee2e6"});
                $('#text-error-sinopsis').hide();
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