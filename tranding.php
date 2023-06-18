<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tranding CinemaStar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./assets/css/main.css">
		<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="assets/css/tranding.css" rel="stylesheet">

	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<section id="header" class="wrapper">

<!-- Logo -->
	<div id="logo">
		<h1>CINEMASTAR</h1>
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

			<!-- Main -->
				<div id="main" class="wrapper style2">
					<div class="title">TRANDING TOP 10</div>
					<div class="container">
						<?php 
							include('admin/connect.php');
							$data_film = mysqli_query($conn, "SELECT film.*, AVG(komentar.rating) AS rating_nilai, COUNT(komentar.id_film) AS rating_jumlah FROM film LEFT JOIN komentar ON komentar.id_film = film.id_film GROUP BY film.id_film ORDER BY rating_nilai DESC LIMIT 9;");
							$i=1;
							while($film = mysqli_fetch_array($data_film)) {
								$data_foto = mysqli_query($conn, "SELECT * FROM foto_film WHERE id_film= $film[id_film] ORDER BY id_foto_film DESC");
								while($foto = mysqli_fetch_array($data_foto)) {
									$foto_bg = $foto['foto'];
								}
						?>

						<div class="row" style="margin-top: 10px;">
							<div class="col-3 text-right">
								<button class="button style3" style="text-align: center;" disabled>#<?= $i++ ?></button><br><br>
								<img src="admin/images/produk/<?= $foto_bg ?>" width="250px">
							</div>
							<div class="col">
								<h3 style="font-size: 2rem; margin-bottom: 20px;"><?= strtoupper($film['judul_film']) ?></h3>
								<style>.checked { color: red;}</style>
								<?php 
									for ($i=1; $i <= $film['rating_nilai'] ; $i++) { 
										echo "<span class='fa fa-star checked'></span>";
									}
									$bintang_hitam = 5-$film['rating_nilai'];
									for ($i=1; $i <= $bintang_hitam ; $i++) { 
										echo "<span class='fa fa-star'></span>";
									}
								?>
								(<?php if($film['rating_nilai']==NULL){ echo "0";}else{ echo $film['rating_nilai'];} ?>/5) ( <small class="icon solid fa-user"></small> <?= $film['rating_jumlah'] ?>)
								<br>
								<?php 
									$data_kategori = mysqli_query($conn, "SELECT * FROM kategori_film INNER JOIN kategori ON kategori.id_kategori = kategori_film.id_kategori WHERE id_film= $film[id_film] ORDER BY id_kategori_film DESC");
									while($kategori = mysqli_fetch_array($data_kategori)) {
								?>
									<span class="badge badge-secondary"><?= $kategori['nama_kategori'] ?></span>
								<?php 
									}
								?>
								<br>
								<label for="">Sutradara</label><br>
								<?php 
									$data_sutradara = mysqli_query($conn, "SELECT * FROM sutradara_film INNER JOIN sutradara ON sutradara.id_sutradara = sutradara_film.id_sutradara WHERE id_film= $film[id_film] ORDER BY id_sutradara_film DESC");
									while($sutradara = mysqli_fetch_array($data_sutradara)) {
								?>
									<span class="badge badge-danger"><?= $sutradara['nama'] ?></span>
								<?php 
									}
								?>
								<br>
								<label for="">Aktor</label><br>
								<?php 
									$data_aktor = mysqli_query($conn, "SELECT * FROM aktor_film INNER JOIN aktor ON aktor.id_aktor = aktor_film.id_aktor WHERE id_film= $film[id_film] ORDER BY id_aktor_film DESC");
									while($aktor = mysqli_fetch_array($data_aktor)) {
								?>
									<span class="badge badge-secondary"><?= $aktor['nama'] ?></span>
								<?php 
									}
								?>
								<br>
								<label for="">Sinopsis</label>
								<p class="text-justify">
									<?= (str_word_count($film['sinopsis']) > 150 ? substr($film['sinopsis'],0,500)."[...]" : $film['sinopsis']) ?>
								</p>
								<a href="film2_detail.php?id_film=<?= $film['id_film'] ?>" class="button style3 large">LIHAT DETAIL</a>
							</div>
						</div>

						<?php
                            }
                        ?>

						

					</div>
				</div>

			

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

		<!-- Scripts -->
			<!-- Bootstrap core JavaScript-->
			<script src="assets/vendor/jquery/jquery.min.js"></script>
    		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>