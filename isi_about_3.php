<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>ARTIKEL 3 CINEMASTAR</title>
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
					<li><a href="index.php">Beranda</a></li>
					<li><a href="film2.php">Film</a></li>
					<li><a href="tranding.php">Tranding</a></li>
					<li><a href="about_us.php">About Us</a></li>
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
		<!-- Main -->
		<div id="main" class="wrapper style2">
			<div class="title">Artikel</div>
			<div class="container">
				<!-- Content -->
				<div id="content">
					<article class="box post">
						<header class="style1">
							<h2>3 Film Action Rating Tertinggi</h2>
							<p>ada 3 rekomendasi film action dengan Rating tertinggi yang tidak boleh kalian lewatkan</p>
						</header>
						<a href="#" class="image featured">
							<img src="images/about7.jpg" alt="" />
						</a>
						<p>1. John Wick : Chapter 4 <br>
							Pemain: Keanu Reeves, Donnie Yen, dkk<br>
							Sutradara: Chad Stahelski <br>
							film John Wick: Chapter 4 ini juga akan menjadi film pertama John Wick tanpa adanya kredit penulisan untuk pencipta waralaba Derek Kolstad. Bisa dibilang cukup banyak penggemar dari John Wick yang menunggu kelanjutan dari seri yang satu ini.
						</p>
						<p>2. Mission: Impossible<br>
							Pemain: Ving Rhames, Simon Pegg, Rebecca Ferguson, Henry Czerny, Vanessa Kirby, dkk <br>
							Sutradara: Christopher McQuarrie <br>
							Mission: Impossible 7 bisa menjadi rekomendasi film action di tahun 2022. Sama seperti sebelumnya, Tom Cruise kembali memerankan karakter Ethan dalam film tersebut. Lalu pastinya ada karakter lain yang tidak kalah penting seperti Hayley Atwell ataupun Pom Klementieff.
						</p>
						<p>3. THE 355<br>
							Pemain: Jessica Chastain, Lupita Nyong'o dan Diane Kruger<br>
							Sutradara: Kinberg <br>
							Film THE 355 ini akan menceritakan kisah agen CIA yang bergabung dengan pasukan tiga agen internasional untuk menjalankan misi di laut. Mereka ditugaskan untuk mendapatkan kembali senjata rahasia yang jatuh ke tangan tentara bayaran. Selain itu, dalam film THE 355 ini, diceritakan pula bahwa para agen CIA ini juga harus bisa lebih pintar melakukan strategi dari seorang wanita misterius yang menelusuri setiap langkah agen CIA.
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
				<div class="row">
					<div class="col-6 col-12-medium">
						<!-- Contact Form -->
						<section>
							<form method="post" action="#">
								<div class="row gtr-50">
									<div class="col-6 col-12-small">
										<input type="text" name="name" id="contact-name" placeholder="Name" />
									</div>
									<div class="col-6 col-12-small">
										<input type="text" name="email" id="contact-email" placeholder="Email" />
									</div>
									<div class="col-12">
										<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" class="style1" value="Send" /></li>
											<li><input type="reset" class="style2" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
					</div>
					<div class="col-6 col-12-medium">
						<!-- Contact -->
						<section class="feature-list small">
							<div class="row">
								<div class="col-6 col-12-small">
									<section>
										<h3 class="icon solid fa-home">Mailing Address</h3>
										<p>
											Untitled Corp<br />
											1234 Somewhere Rd<br />
											Nashville, TN 00000
										</p>
									</section>
								</div>
								<div class="col-6 col-12-small">
									<section>
										<h3 class="icon solid fa-comment">Social</h3>
										<p>
											<a href="#">@untitled-corp</a><br />
											<a href="#">linkedin.com/untitled</a><br />
											<a href="#">facebook.com/untitled</a>
										</p>
									</section>
								</div>
								<div class="col-6 col-12-small">
									<section>
										<h3 class="icon solid fa-envelope">Email</h3>
										<p>
											<a href="#">info@untitled.tld</a>
										</p>
									</section>
								</div>
								<div class="col-6 col-12-small">
									<section>
										<h3 class="icon solid fa-phone">Phone</h3>
										<p>
											(000) 555-0000
										</p>
									</section>
								</div>
							</div>
						</section>
					</div>
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