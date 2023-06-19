<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>ABOUT US CINEMASTAR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.html">CINEMASTAR</a></h1>
							<p>Review Film Luar Negeri dan Dalam Negeri</p>
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
					<div class="title">Tentang Kami</div>
					<div class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>CinemaStar adalah website yang mereview film luar negeri dan dalam negeri, anda bisa menilai setiap film yang pernah anda tonton, berikan komentar terbaik untuk film favorit anda</h2>
										<p>Pahami Lebih Lanjut Mengenai CinemaStar</p>
									</header>
									<a href="#" class="image featured">
										<img src="images/about4.png" alt="" />
									</a>
									<p>CinemaStar, merupakan Website review film terbesar di Indonesia yang memulai kiprahnya di industri hiburan sejak tahun 1987. Lebih dari 30 tahun, CinemaStar berkomitmen untuk senantiasa memberikan gambaran dari sebuah film yang bersumber dari pengalaman ribuan Reviewers. Sampai dengan Mei tahun ini, CinemaStar memiliki total 120Jt Reviewers yang tersebar di seluruh Indonesia.

										Selain dapat menilai film, Anda Juga dapat memberikan komentar terbaik anda disetiap film yang telah anda tonton. CinemaStar memberikan tempat untuk anda menilai dan meriview film mulai dari film lokal maupun film luar negeri.
										
										CinemaStar terus mengikuti perkembangan teknologi dengan terus berupaya memberikan kenyamanan saat memberi review film tanpa gangguan apapun.
										
										Untuk menyempurnakan pelayanan kepada reviewers, kami selalu akan terus berbenah menjadi yang terbaik</p>

									<p>Dengan CinemaStar anda dapat meriview film dengan memecah sebuah karya (film) ke dalam penilaian atas unsur-unsurnya seperti cerita, penyutradaraan, akting, musik, setting, alur, suasana dan lain lain. CinemaStar hadir sebagai bentuk solusi dari permasalahan masyarakat yang ragu saat ingin menonton sebuah film, dikarenakan jika hanya mengandalkan trailler saja tidak cukup.
										Review dan penilaian anda dari sebuah film yang telah anda tonton sangat berguna bagi orang lain yang mengalami masalah tersebut. Jadilah seorang reviewers yang bijak dan bermanfaat bagi orang lain.
									</p>
								</article>
							</div>

					</div>
				</div>

			<!-- Highlights -->
				<section id="highlights" class="wrapper style3">
					<div class="title">Informasi Lebih Lanjut</div>
					<div class="container">
						<div class="row aln-center">
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/about5.jpg" alt="" /></a>
									<h3><a href="#">3 Film Komedi dengan Rating Terbaik</a></h3>
									<p>Kalau masih bingung harus menonton film komedi apa saja, Kamu sedang membaca artikel yang tepat. Sebab, di sini terdapat rekomendasi sekaligus ulasan film komedi Indonesia terbaik yang lucunya dijamin menyegarkan pikiranmu.</p>
									<ul class="actions">
										<li><a href="isi_about_1.php" class="button style1">Baca Selengkapnya</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/about6.jpg" width="200px" height="165px" alt="" /></a>
									<h3><a href="#">3 Film Romance Rating Tertinggi</a></h3>
									<p>Mau tahu lebih banyak film romantis Indonesia dengan rating tertinggi? CinemaStar punya rekomendasi film romantis Indonesia terbaik yang sedang tayang di bioskop, dan tersedia di aplikasi streaming legal seperti Netflix, loh.</p>
									<ul class="actions">
										<li><a href="isi_about_2.php" class="button style1">Baca Selengkapnya</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/about7.jpg" width="200px" height="165px" alt="" /></a>
									<h3><a href="#">3 Film Action Rating Tertinggi</a></h3>
									<p> ada 3 rekomendasi film action dengan Rating tertinggi yang tidak boleh kalian lewatkan. daftar rekomendasi film action ini bisa membantu kalian yang ingin nonton film action. Yuk langsung saja dicek!</p>
									<ul class="actions">
										<li><a href="isi_about_3.php" class="button style1">Baca Selengkapnya</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</section>

				<section id="highlights" class="wrapper style2">
					<div class="title">Our Tim</div>
					<div class="container">
						<div class="row aln-center">
							<div class="col-3 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured rounded"><img src="images/heruseptiana.jpg"  width="200px"  style="border-radius: 100%;" alt="" /></a>
									<h3><a href="#">Heru Septiana</a></h3>
									<p>Sekolah Tinggi Teknologi Bandung</p>
								</section>
							</div>
							<div class="col-3 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/saiful.jpg"  width="200px"  style="border-radius: 100%;" alt="" /></a>
									<h3><a href="#">M. Saifullah Candra</a></h3>
									<p>Universitas Pesantren Tinggi darul Ulum</p>
								</section>
							</div>
							<div class="col-3 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/farid.jpg"  width="200px"  style="border-radius: 100%;" alt="" /></a>
									<h3><a href="#">Muh. Farid Fatwa</a></h3>
									<p>Universitas DIPA Makasar</p>
								</section>
							</div>
							<div class="col-3 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/nada1.jpg" width="200px"  style="border-radius: 100%;" alt="" /></a>
									<h3><a href="#">Fidhina Fina Dalila</a></h3>
									<p> Universitas Alma Ata Yogyakarta </p>
								</section>
							</div>
						</div>
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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>