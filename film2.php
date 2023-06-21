<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>CinemaStar</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="shortcut icon" href="#" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="no-sidebar is-preload">
  <div id="page-wrapper">
    <!-- Header -->
    <section id="header" class="wrapper">
      <!-- Logo -->
      <div id="logo">
        <h1><a href="index.html">FILM - FILM</a></h1>
        <p style="color: white;">Ayo mulai riview Film favorit kamu, disini!</p>
      </div>
      <!-- Nav -->
      <nav id="nav">
        <ul>
          <li class="current"><a href="index.php">Beranda</a></li>
          <li><a href="film2.php">Film</a></li>
          <li><a href="tranding.php">Tranding</a></li>
          <li><a href="about_us.php">Tentang Kami</a></li>
          <?php if ($_SESSION) { ?>
            <?php if (isset($_SESSION['id_user']) !== null) { ?>
              <li>
                <a href="#" class="icon solid fa-user"> <?= $_SESSION['nama'] ?></a>
                <ul>
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="model/beranda_model.php?aksi=logout">Logout</a></li>
                </ul>
              </li>
            <?php } ?>
          <?php } else { ?>
            <li><a href="login.php">LOGIN | DAFTAR</a></li>
          <?php } ?>
        </ul>
      </nav>
    </section>
    <section class="upcoming">
      <div class="container">
        <div class="flex-wrapper">
          <div class="title-wrapper">
            <h2 class="h2 section-title">
              <?php
              include('admin/connect.php');
              if ($_GET) {
                echo $_GET['kategori'];
              } else {
                echo "Semua Film";
              }
              ?>
            </h2>
          </div>
          <ul class="filter-list" style="padding-left: 200px;">
            <li>
              <button class="filter-btn"><a href="film2.php" style="color : white;">Semua Film</a></button>
            </li>
            <?php
            include('admin/connect.php');
            $data_kategori = mysqli_query($conn, "SELECT * FROM kategori");
            while ($kategori = mysqli_fetch_array($data_kategori)) {
            ?>
              <li>
                <button class="filter-btn"><a href="?kategori=<?= $kategori['nama_kategori'] ?>" style="color : white;"><?= $kategori['nama_kategori'] ?></a></button>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
        <section id="film_action">
          <ul class="movies-list">
            <?php
            if ($_GET) {
              $data_film = mysqli_query($conn, "SELECT film.*, AVG(komentar.rating) AS rating_nilai, COUNT(komentar.id_film) AS rating_jumlah FROM film LEFT JOIN komentar ON komentar.id_film = film.id_film INNER JOIN kategori_film ON kategori_film.id_film = film.id_film INNER JOIN kategori ON kategori.id_kategori = kategori_film.id_kategori WHERE kategori.nama_kategori='$_GET[kategori]' GROUP BY film.id_film ORDER BY rating_nilai DESC;");
            } else {
              $data_film = mysqli_query($conn, "SELECT film.*, AVG(komentar.rating) AS rating_nilai, COUNT(komentar.id_film) AS rating_jumlah FROM film LEFT JOIN komentar ON komentar.id_film = film.id_film GROUP BY film.id_film ORDER BY rating_nilai DESC;");
            }
            while ($film = mysqli_fetch_array($data_film)) {
              $data_foto = mysqli_query($conn, "SELECT * FROM foto_film WHERE id_film= $film[id_film] ORDER BY id_foto_film DESC");
              while ($foto = mysqli_fetch_array($data_foto)) {
                $foto_bg = $foto['foto'];
              }
            ?>
              <li>
                <div class="movie-card">
                  <a href="film2_detail.php?id_film=<?= $film['id_film'] ?>">
                    <figure class="card-banner">
                      <img src="admin/images/produk/<?= $foto_bg ?>" alt="The Northman movie poster">
                    </figure>
                  </a>
                  <div class="title-wrapper">
                    <a href="film2_detail.php?id_film=<?= $film['id_film'] ?>">
                      <h3 class="card-title"><?= $film['judul_film'] ?></h3>
                    </a>
                    <time datetime="<?= date('Y', strtotime($film["tgl_tayang"])); ?>"><?= date('Y', strtotime($film["tgl_tayang"])); ?></time>
                  </div>
                  <div class="card-meta">
                    <div class="badge badge-outline"><?= $film['rating'] ?></div>
                    <div class="duration">
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT137M"><?= $film['durasi'] ?> min</time>
                    </div>
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <data><?php if ($film['rating_nilai'] == NULL) {
                              echo "0";
                            } else {
                              echo $film['rating_nilai'];
                            } ?>/5</data>
                    </div>
                  </div>
                </div>
              </li>
            <?php
            }
            ?>
          </ul>
        </section>
      </div>
    </section>
    <!-- Footer -->
    <section id="footer" class="wrapper">
      <div class="title">CinemaStar</div>
      <div class="container">
        <header class="style1">
          <h2>Daftar Sekarang dan Mulai Review Film Favoritmu Sekarang!</h2>
          <p>
            Satu Review mu akan sangat membantu orang lain!<br />
            Login | Daftar sekarang Juga!
          </p>
        </header>
        <div class="row ">
          <div class="col-6 col-12-medium ">
            <br><br>
            <center>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4147903503203!2d107.57834587486145!3d-6.960298793040131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8d1e2a33ac1%3A0xbcf0e96329f2d286!2sMiko%20Mall%2C%20Jl.%20Raya%20Kopo%2C%20Margasuka%2C%20Kec.%20Babakan%20Ciparay%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040225!5e0!3m2!1sid!2sid!4v1686124847810!5m2!1sid!2sid" width="500" height="400px" style="border: 1%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
          </div>
          <div class="col-6 col-12-medium">
            <h1 style="margin-bottom: 40px; text-align: center;">CONTACT</h1>
            <section class="feature-list small">
              <div class="row">
                <div class="col-6 col-12-small">
                  <section>
                    <h3 class="icon solid fa-home">Alamat</h3>
                    <p>
                      Jl. Terusan Kopo No.385/299,<br> Margahayu Sel., Kec. Margahayu,br Kabupaten Bandung, Jawa Barat 40226
                    </p>
                  </section>
                </div>
                <div class="col-6 col-12-small">
                  <section>
                    <h3 class="icon solid fa-comment">Media Sosial</h3>
                    <p>
                      Facebook : @CinemaStar
                      Instagram : @CinemaStar
                      Twitter : @CinemaStar
                    </p>
                  </section>
                </div>
                <div class="col-6 col-12-small">
                  <section>
                    <h3 class="icon solid fa-envelope">Email</h3>
                    <p>
                      <a href="#">info@cinemastar.com</a>
                    </p>
                  </section>
                </div>
                <div class="col-6 col-12-small">
                  <section>
                    <h3 class="icon solid fa-phone">Phone</h3>
                    <p>
                      (082) 555-2343-334
                    </p>
                  </section>
                </div>
              </div>
            </section>
          </div>
        </div>
        <div id="copyright">
          <ul>
            <li>&copy; cinemastar kelompok 1 eduwork | 2022 - 2023.</li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <!--custom js link-->
  <script src="./assets/js/script.js"></script>
  <!-- ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.dropotron.min.js"></script>
  <script src="assets/js/browser.min.js"></script>
  <script src="assets/js/breakpoints.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>