<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>CinemaStar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/tranding.css">
         <!-- 
            - favicon
        -->
        <link rel="shortcut icon" href="#" type="image/svg+xml">

        <!-- 
        - custom css link
        -->
        <link rel="stylesheet" href="./assets/css/style.css">

        <!-- 
        - google font link
        -->
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
                  <?php if($_SESSION){ ?>
                    <?php if(isset($_SESSION['id_user'])!==null){ ?>
                      <li>
                        <a href="#" class="icon solid fa-user"> <?= $_SESSION['nama'] ?></a>
                        <ul>
                          <li><a href="profile.php">Profile</a></li>
                          <li><a href="model/beranda_model.php?aksi=logout">Logout</a></li>
                        </ul>
                      </li>
                    <?php } ?>
                    <?php }else{ ?>
                      <li><a href="login.php">LOGIN | DAFTAR</a></li>
                  <?php } ?>
                </ul>
              </nav>

				</section>

        <section class="movie-detail">
        <div class="container">

        <?php 
							include('admin/connect.php');
							$data_film = mysqli_query($conn, "SELECT film.*, AVG(komentar.rating) AS rating_nilai, COUNT(komentar.id_film) AS rating_jumlah FROM film LEFT JOIN komentar ON komentar.id_film = film.id_film WHERE film.id_film = $_GET[id_film] GROUP BY film.id_film;");
							$i=1;
							while($film = mysqli_fetch_array($data_film)) {
								$data_foto = mysqli_query($conn, "SELECT * FROM foto_film WHERE id_film= $film[id_film] ORDER BY id_foto_film DESC");
								while($foto = mysqli_fetch_array($data_foto)) {
									$foto_bg = $foto['foto'];
								}
						?>
        <figure class="movie-detail-banner">
            <img src="admin/images/produk/<?= $foto_bg ?>" alt="Free guy movie poster" >
          </figure>
        <div class="movie-detail-content">
          <h1 class="h1 detail-title">
          <?= $film['judul_film'] ?>
          </h1>
			  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<style>.checked { color: red;}</style>

        <?php 
									$ratinng_bintang = floor($film['rating_nilai']);
									for ($i=1; $i <= $ratinng_bintang ; $i++) { 
										echo "<span class='fa fa-star checked'></span>";
									}
									$bintang_hitam = 5-$ratinng_bintang;
									for ($i=1; $i <= $bintang_hitam ; $i++) { 
										echo "<span class='fa fa-star'></span>";
									}
								?>
								(<?php if($film['rating_nilai']==NULL){ echo "0";}else{ echo round($film['rating_nilai'],1);} ?>/5) 

								<br>
								
            <div class="meta-wrapper">
              <div class="ganre-wrapper">
              <?php 
									$data_kategori = mysqli_query($conn, "SELECT * FROM kategori_film INNER JOIN kategori ON kategori.id_kategori = kategori_film.id_kategori WHERE id_film= $film[id_film] ORDER BY id_kategori_film DESC");
									while($kategori = mysqli_fetch_array($data_kategori)) {
								?>
									<div style="font-size: 15px;" ><?= $kategori['nama_kategori'] ?></div>
								<?php 
                    $kategori_terkait = $kategori['nama_kategori'];
									}
								?>
              </div>
              <div class="date-time">
                <div>
                  <ion-icon name="calendar-outline"></ion-icon>
                  <time datetime="2021"><?= date('d F Y',strtotime($film['tgl_tayang']))?></time>
                </div>
                <div>
                  <ion-icon name="time-outline"></ion-icon>
                  <time datetime="PT115M"><?= $film['durasi'] ?> min</time>
                </div>
              </div>
            </div>
            <div class="ganre-wrapper">
              <div style="font-size: 15px;">Sutradara : 
              <?php 
                $data_sutradara = mysqli_query($conn, "SELECT * FROM sutradara_film INNER JOIN sutradara ON sutradara.id_sutradara = sutradara_film.id_sutradara WHERE id_film= $film[id_film] ORDER BY id_sutradara_film DESC");
                while($sutradara = mysqli_fetch_array($data_sutradara)) {
              ?>
                <?= $sutradara['nama']?>
              <?php 
                }
              ?>
              </div>
            </div>
			      <div class="ganre-wrapper">
              <div style="font-size: 15px;">Aktor : 
              <?php 
									$data_aktor = mysqli_query($conn, "SELECT * FROM aktor_film INNER JOIN aktor ON aktor.id_aktor = aktor_film.id_aktor WHERE id_film= $film[id_film] ORDER BY id_aktor_film DESC");
									while($aktor = mysqli_fetch_array($data_aktor)) {
								?>
                    <?= $aktor['nama'] ?>,
              <?php 
									}
              ?>  
              </div>
            </div>
            <p class="storyline" style="text-align: justify;" >
            <?= nl2br($film['sinopsis'])?>
            <br><br>
			        <iframe width="620" height="315" src="<?= $film['link_trailer'] ?>" 
              title="YouTube video player" frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
              allowfullscreen></iframe>
            </p>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-9">

            <div class="card">
              <div class="card-body">
                <h1 style="font-size: 25px;">KOMENTAR | REVIEW</h1>
                <form action="model/komentar_model.php" method="POST">
                  <input type="hidden" name="id_user" value="<?php if($_SESSION){echo $_SESSION['id_user'];} ?>">
                  <input type="hidden" name="id_film" value="<?= $_GET['id_film'] ?>">
                  <div class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label> 
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label> 
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label> 
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label> 
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label> 
                  </div> 
                  <br>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tulis komentar, berikan review (rating)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="komentar"></textarea>
                  </div>
                  <br>
                  <?php if($_SESSION){ ?>
                    <?php if(isset($_SESSION['id_user'])!==null){ ?>
                      <button type="submit" class="button style1">Kirim</button>
                      <?php } ?>
                      <?php }else{ ?>
                        <a href="login.php?alert=login_terlebih_dahulu" class="button style1">Kirim</a>
                  <?php }?>
              </form>
                <hr>
                <?php 
                    include('admin/connect.php');
                    $data_user = mysqli_query($conn, "SELECT komentar.*, user.nama, user.foto FROM komentar INNER JOIN user ON user.id_user = komentar.id_user WHERE komentar.id_film = $_GET[id_film] Order By komentar.tgl_komentar ASC");
                    while($user = mysqli_fetch_array($data_user)) {
                ?>

                    <div class="row">
                      <div class="col-1"><img src="admin/images/profile/<?= $user['foto'] ?>" alt="" width="50px"></div>
                      <div class="col">
                        <?= $user['nama'] ?> 
                        <div class="rating"> 
                        <?php 
                          for ($i=1; $i <= $user['rating'] ; $i++) { 
                            echo "<span class='fa fa-star checked'></span>";
                          }
                          $bintang_hitam = 5-$user['rating'];
                          for ($i=1; $i <= $bintang_hitam ; $i++) { 
                            echo "<span class='fa fa-star'></span>";
                          }
                        ?>
                        </div> 
                            <label style="text-align: justify;"><?= $user['isi_komentar'] ?></label>
                            <br>
                            <small><i>~ <?= date('d M Y H:i:s', strtotime($user['tgl_komentar'])) ?></i></small>
                      </div>
                      <div class="col-1"></div>
                    </div>
                    <br>

                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="tv-series">
        <div class="container">

          <h2 class="h2 section-title">Film Yang Berkaitan</h2>
          <ul class="movies-list">
          <?php 
             
              $data_film = mysqli_query($conn, "SELECT film.*, AVG(komentar.rating) AS rating_nilai, COUNT(komentar.id_film) AS rating_jumlah FROM film LEFT JOIN komentar ON komentar.id_film = film.id_film INNER JOIN kategori_film ON kategori_film.id_film = film.id_film INNER JOIN kategori ON kategori.id_kategori = kategori_film.id_kategori WHERE kategori.nama_kategori='$kategori_terkait'  AND film.id_film!=$_GET[id_film] GROUP BY film.id_film ORDER BY rating_nilai DESC LIMIT 4;");
							while($film = mysqli_fetch_array($data_film)) {
								$data_foto = mysqli_query($conn, "SELECT * FROM foto_film WHERE id_film= $film[id_film] ORDER BY id_foto_film DESC");
								while($foto = mysqli_fetch_array($data_foto)) {
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
                  <time datetime="<?= date('Y',strtotime($film["tgl_tayang"])); ?>"><?= date('Y',strtotime($film["tgl_tayang"])); ?></time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline"><?= $film['rating'] ?></div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT137M"><?= $film['durasi'] ?> min</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data><?php if($film['rating_nilai']==NULL){ echo "0";}else{ echo round($film['rating_nilai']);} ?>/5</data>
                  </div>
                </div>
              </div>
            </li>
            <?php 
                }
            ?>
            
          </ul>
        <?php 
        } 
        ?>
          
        </div>
      </section>
    </article>
  </main>
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
													<p >
														Facebook  : @CinemaStar
														Instagram : @CinemaStar
														Twitter	  : @CinemaStar

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

          <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

<!-- 
  - ionicon link
-->
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