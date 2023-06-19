<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>CinemaStar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css">
		
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.html">Guardians of The Galaxy Volume 3</a></h1>
							<p style="color: white;">Di Marvel Studios "Guardians of the Galaxy Vol. 3",  kumpulan <br> orang-orang aneh yang kita cintai terlihat sedikit berbeda akhir-akhir ini.</p>
							<button class="button style3 large" style="margin-top: 20px;"> <a href="film2.php" style="color: white;">LIHAT FILM</a></button>
						</div>

			<!-- Nav -->
			<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Beranda</a></li>
						<li><a href="film2.php">Film</a></li>
						<li><a href="tranding.php">Tranding</a></li>
						<li><a href="about_us.html">Tentang Kami</a></li>
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

			<!-- Intro -->
				<section id="intro" class="wrapper style1">
					<div class="title">CINEMASTAR</div>
					<div class="container">
						<p class="style2" style="color: #484d55;">
							REVIEW KUMPULAN-KUMPULAN <br> FILM LUAR NEGERI DAN DALAM NEGERI
						</p>
						<p class="style3">
							<strong>CinemaStar</strong>  adalah website yang mereview film luar negeri dan dalam negeri, anda bisa menilai setiap film yang pernah anda tonton, berikan komentar terbaik untuk film favorit anda.
						</p>
						<ul class="actions">
							<li><a href="film2.php" class="button style3 large" style="color: #f3f3f3;">MULAI</a></li>
						</ul>
					</div>
				</section>

			<!-- Main -->
				<section id="main" class="wrapper style2">
					<div class="title">The Details</div>
					<div class="container">

						<!-- Image -->
							<a href="#" class="image featured">
								<img src="images/bg4.jpg" alt="" />
							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2>CINEMASTAR</h2>
									<p>Kelebihan dari website yang lain?</p>
								</header>
								<div class="feature-list">
									<div class="row">
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon fa-comment">Komentar kapan saja</h3>
												<p>Komentar hanya dengan login menggunakan email anda dapat berkomentar disetiap film</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-sync">Film ter-update</h3>
												<p>Kami menyajikan film terbaru dan yang sedang tayang di bioskop agar anda tahu reaksi orang lain terhadap film itu.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-check">Film Original</h3>
												<p>Selain menyajikan film ter-update kami juga menyajikan review film-film original dan tidak bajakan</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-cog">Tranding Sesuai Review</h3>
												<p>Mengurutkan tranding sesuai review yang anda berikan, dari rating ter-tinggi hingga ter-rendah</p>
											</section>
										</div>
									</div>
								</div>
								<ul class="actions special">
									<li><a href="about_us.html" class="button style1 large">INFO LEBIH LANJUT</a></li>
								</ul>
							</section>
					</div>
				</section>
			<!-- Highlights -->
				<section id="highlights" class="wrapper style3" style="background-color: black;">
					<div class="title" style="background-color: black; color: white;">FILM - FILM</div>
					<div class="container">
						<ul class="movies-list  has-scrollbar">
							<?php
								include("admin/connect.php");
								$data_film = mysqli_query($conn, "SELECT * FROM film");
								while ($film = mysqli_fetch_array($data_film)) {
									$id_film = $film['id_film'];	
									$judul_film = $film['judul_film'];	
									$durasi_film = $film['durasi'];
									$tgl_tayang_film = $film['tgl_tayang'];
									$rating = $film['rating'];
								$data_foto = mysqli_query($conn, "SELECT * FROM foto_film WHERE id_film=$id_film ORDER BY id_foto_film DESC limit 2");
								while ($foto = mysqli_fetch_array($data_foto)) {
									$foto_gm = $foto['foto'];
								}
							?>
							<li>
							  <div class="movie-card">			

								<a href="film2_detail.php?id_film=<?= $film['id_film']?>">
								  <!-- <figure class="card-banner"> -->
									<img src="./admin/images/produk/<?php echo $foto_gm; ?>" width="230px" alt="">
								  <!-- </figure> -->
								</a>
								<div class="title-wrapper">
								  <a href="film2_detail.php?id_film=<?= $film['id_film']?>">
									<h3 class="card-title"><?= $film['judul_film'] ?></h3>

								  </a>
								  <!-- <td><?= date('d-m-Y',strtotime($film['tgl_tayang'])); ?></td> -->
								  <time datetime="2022"><?= date('Y',strtotime($film['tgl_tayang']))?></time>
								</div>
				
								<div class="card-meta">
								  <div class="badge badge-outline"><?= $film['rating']?></div>
				
								  <div class="duration">
									<ion-icon name="time-outline"></ion-icon>				
									<time datetime="PT137M"><?= $film['durasi'] ?></time>
								  </div>
								  <div class="rating">
									<ion-icon name="star"></ion-icon>
									<data>
									<?php if($film['rating_nilai']==NULL){ echo "0";}else{ echo $film['rating_nilai'];} ?>/5 
									</data>
								  </div>
								</div>
							  </div>
							</li>
							<?php	
								}
							?>
						  </ul>
						  <ul class="actions special">
							<li><a href="film2.php" class="button style2 large">LIHAT LEBIH BANYAK</a></li>
						</ul>
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