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
		<link rel="stylesheet" href="assets/css/main.css">
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
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><a href="index.html">Guardians of The Galaxy Volume 3</a></h1>
							<p style="color: white;">Di Marvel Studios "Guardians of the Galaxy Vol. 3",  kumpulan <br> orang-orang aneh yang kita cintai terlihat sedikit berbeda akhir-akhir ini.</p>
							<button class="button style3 large" style="margin-top: 20px;"><a href="film2.php" style="color:white;">LIHAT FILM</a></button>
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

          <figure class="movie-detail-banner">

            <img src="images/fast.jpg" alt="Free guy movie poster" >

            

          </figure>

          <div class="movie-detail-content">

            <h1 class="h1 detail-title">
              FAST X
            </h1>

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<style>.checked { color: red;}</style>
				<h2>Star Rating By CinemaStar</h2>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
            <div class="meta-wrapper">


              <div class="ganre-wrapper">
                <a href="#">Comedy,</a>

                <a href="#">Action,</a>

                <a href="#">Adventure,</a>

                <a href="#">Science Fiction</a>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2021">23 Agustus 2023</time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT115M">115 min</time>
                </div>

              </div>

            </div>
			<div class="ganre-wrapper">
				<p>Aktor :</p>
                <a href="#">Comedy,</a>

                <a href="#">Action,</a>

                <a href="#">Adventure,</a>

                <a href="#">Science Fiction</a>
              </div>

			  <div class="ganre-wrapper">
				<p>Sutradara :</p>
                <a href="#">Comedy,</a>

                <a href="#">Action,</a>

                <a href="#">Adventure,</a>

                <a href="#">Science Fiction</a>
              </div>

            <p class="storyline" style="text-align: justify;" >
			Bahasa Indonesia - Selama banyak misi dan melawan rintangan yang mustahil, Dom Toretto dan keluarganya telah mengakali dan mengalahkan setiap musuh di jalan mereka. Sekarang, mereka menghadapi lawan paling mematikan yang pernah mereka hadapi: Ancaman mengerikan yang muncul dari bayang-bayang masa lalu yang dipicu oleh dendam berdarah, dan yang bertekad untuk menghancurkan keluarga ini dan menghancurkan segalanya—dan semua orang—yang dicintai Dom, selamanya. Dalam Fast Five 2011, 
			
			<br><br>
			<iframe width="620" height="315" src="https://www.youtube.com/embed/eoOaKN4qCKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </p>

			<style>
body {
    font-family: 'Lucida Grande', 'Helvetica Neue', sans-serif;
    font-size: 13px;
}

#comment_form input, #comment_form textarea {
    border: 2px solid rgba(0,0,0,0.1);
    padding: 8px 10px;
    outline: 0;
}
#comment_form input {
    width: 250px;
}
#comment_form textarea {
    width: 450px;
	
}

#comment_form input[type="submit"] {
    cursor: pointer;
    background: -webkit-linear-gradient(top, #efefef, #ddd);
    background: -moz-linear-gradient(top, #efefef, #ddd);
    background: -ms-linear-gradient(top, #efefef, #ddd);
    background: -o-linear-gradient(top, #efefef, #ddd);
    background: linear-gradient(top, #efefef, #ddd);
    color: #333;
    text-shadow: 0px 1px 1px rgba(255,255,255,1);
    border: 1px solid #ccc;
}

#comment_form input[type="submit"]:hover {
    background: -webkit-linear-gradient(top, #eee, #ccc);
    background: -moz-linear-gradient(top, #eee, #ccc);
    background: -ms-linear-gradient(top, #eee, #ccc);
    background: -o-linear-gradient(top, #eee, #ccc);
    background: linear-gradient(top, #eee, #ccc);
    border: 1px solid #bbb;
}

#comment_form input[type="submit"]:active {
    background: -webkit-linear-gradient(top, #ddd, #aaa);
    background: -moz-linear-gradient(top, #ddd, #aaa);
    background: -ms-linear-gradient(top, #ddd, #aaa);
    background: -o-linear-gradient(top, #ddd, #aaa);
    background: linear-gradient(top, #ddd, #aaa);    
    border: 1px solid #999;
}

#comment_form div {
    margin-bottom: 8px;
}
</style>
<h2>Komentar</h2>
<div id="comment_form">
    
    <div>
        <input type="text" name="name" id="name" value="" placeholder="Name">
    </div>
    <!-- <div>
        <input type="email" name="email" id="email" value="" placeholder="Email">
    </div>
    <div>
        <input type="url" name="website" id="website" value="" placeholder="Website URL">
    </div> -->
    <div>
        <textarea rows="10" name="comment" id="comment" placeholder="Comment Form by Suckittrees.com"></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Add Comment">
    </div>
    
</div>



            <!-- <div class="details-actions">

             

            </div> -->

          </div>

        </div>
      </section>


      <section class="tv-series">
        <div class="container">

          <p class="section-subtitle">-</p>

          <h2 class="h2 section-title">Film Yang Berkaitan</h2>

          <ul class="movies-list">

            <li>
              <div class="movie-card">

                <a href="./movie-details.html">
                  <figure class="card-banner">
                    <img src="./assets/images/series-1.png" alt="Moon Knight movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="./movie-details.html">
                    <h3 class="card-title">Moon Knight</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">47 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.6</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="./movie-details.html">
                  <figure class="card-banner">
                    <img src="./assets/images/series-2.png" alt="Halo movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="./movie-details.html">
                    <h3 class="card-title">Halo</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT59M">59 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.8</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="./movie-details.html">
                  <figure class="card-banner">
                    <img src="./assets/images/series-3.png" alt="Vikings: Valhalla movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="./movie-details.html">
                    <h3 class="card-title">Vikings: Valhalla</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT51M">51 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.3</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="./movie-details.html">
                  <figure class="card-banner">
                    <img src="./assets/images/series-4.png" alt="Money Heist movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="./movie-details.html">
                    <h3 class="card-title">Money Heist</h3>
                  </a>

                  <time datetime="2017">2017</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">4K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT70M">70 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.3</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

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