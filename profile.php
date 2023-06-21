<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account Profile CinemaStar</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/css_profile.css">
</head>
<body>
	<?php 
		session_start();
		include ('admin/connect.php');
		$email = $_SESSION['email'];

		$data_user = mysqli_query($conn, "SELECT * FROM user where email='$email'");
		while ($user = mysqli_fetch_array($data_user)) {
			$id_user = $user['id_user'];
			$nama = $user['nama'];
			$email = $user['email'];
			$telp = $user['telp'];
			$foto = $user['foto'];
			$role = $user['role'];
		}

	
	?>
	<section class="py-5 ">
		<div class="container">
			<div class="bg-white shadow border border-dark rounded-0 d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<?php if($foto=="default.png"){ ?>
                                <img src="images/<?= $foto ?>" alt="Image" class="shadow">
                                <?php }else{ ?>
                                    <img src="admin/images/profile/<?= $foto ?>" alt="Image" class="shadow">
                            <?php } ?>
						</div>
						<h4 class="text-center"><?= $nama ?> </h4>
					</div>
					<div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Akun
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
					<?php 
                        if(isset($_GET['alert'])){
                           if($_GET['alert'] == "gagal"){
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>Gagal</strong>, Data gagal ditambah atau diubah!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                            }elseif($_GET['alert'] == "gagal_password"){
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>Gagal</strong>, Password lama salah, coba ulangi!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                            }elseif($_GET['alert'] == "berhasil_ubah"){
                                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>Berhasil</strong>, Data berhasil diubah!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                            }
                        }
                    
                    ?>
					<form action="model/profile_model.php" method="POST" id="form-pelanggan" enctype="multipart/form-data">
						<input type="hidden" name="aksi" value="ubah_profile">
						<input type="hidden" name="foto_lama" value="<?= $foto ?>">
						<h3 class="mb-4">Pengaturan Akun</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>ID User</label>
								  	<input type="number" class="form-control" name="id_user"  value="<?= $id_user ?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>">
									<small id="text-error-nama"></small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" id="email" name="email" value="<?= $email ?>">
									  <small id="text-error-email"></small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>No Telepon</label>
								  	<input type="text" class="form-control" id="telp" name="telp" value="<?= $telp ?>">
									<small id="text-error-telp"></small>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	<label>Foto</label>
									<input type="file" class="form-control-file" name="foto" accept="image/*"></input>
								</div>
							</div>
						</div>
						<div>
							<button id="my-button" type="button" class="btn btn-primary">Ubah</button>
							<a href="index.php" class="btn btn-light">Batal</a>

						</div>
					</form>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
					<?php 
                        if(isset($_GET['alert'])){
                           if($_GET['alert'] == "gagal"){
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>Gagal</strong>, Data gagal ditambah atau diubah!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                            }elseif($_GET['alert'] == "gagal_password"){
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong>Gagal</strong>, Password lama salah, coba ulangi!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                            }elseif($_GET['alert'] == "berhasil_ubah"){
                                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>Berhasil</strong>, Data berhasil diubah!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                            }
                        }
                    
                    ?>
					<form action="model/profile_model.php" method="POST" id="form-pelanggan2" enctype="multipart/form-data">
					<input type="hidden" name="aksi" value="ubah_password">
					<input type="hidden" name="id_user" value="<?= $id_user ?>">
						<h3 class="mb-4">Penganturan Password</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Password Lama</label>
								  	<input type="password" id="password_lama" name="password_lama" class="form-control">
									  <small id="text-error-password_lama"></small>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Password Baru</label>
								  	<input type="password" id="password_baru" name="password_baru" class="form-control">
									  <small id="text-error-password_baru"></small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Ulang Password</label>
								  	<input type="password" id="ulang_password" name="ulang_password" class="form-control">
									  <small id="text-error-ulang_password"></small>
								</div>
							</div>
						</div>
						<div>
							<button id="my-button2" type="button" class="btn btn-primary">Ubah</button>
							<a href="index.php" class="btn btn-light">Batal</a>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
    $('#my-button').click(function() {
        if ($('#nama').val().length == 0 || $('#email').val().length == 0 || $('#telp').val().length == 0 ) {
            if($('#nama').val().length == 0){
                $('#nama').css({"border-color" : "red"});
                $('#text-error-nama').text('* Silahkan isi nama terlebih dahulu');
                $('#text-error-nama').css({"font-style" : "italic"});
                $('#text-error-nama').css({"color" : "red"});
            }else{
                $('#nama').css({"border-color" : "#dee2e6"});
                $('#text-error-nama').hide();
            }
            if($('#email').val().length == 0){
                $('#email').css({"border-color" : "red"});
                $('#text-error-email').text('* Silahkan isi email terlebih dahulu');
                $('#text-error-email').css({"font-style" : "italic"});
                $('#text-error-email').css({"color" : "red"});
            }else{
                $('#email').css({"border-color" : "#dee2e6"});
                $('#text-error-email').hide();
            }
			if($('#telp').val().length == 0){
                $('#telp').css({"border-color" : "red"});
                $('#text-error-telp').text('* Silahkan isi Telepon terlebih dahulu');
                $('#text-error-telp').css({"font-style" : "italic"});
                $('#text-error-telp').css({"color" : "red"});
            }else{
                $('#telp').css({"border-color" : "#dee2e6"});
                $('#text-error-telp').hide();
            }
           
        } else {
                $('#form-pelanggan').submit();
        }
    });
	$('#my-button2').click(function() {
        if ($('#password_lama').val().length == 0 || $('#password_baru').val().length == 0 || $('#ulang_password').val().length == 0 || $('#password_baru').val().length !== $('#ulang_password').val().length) {
            if($('#password_lama').val().length == 0 ){
                $('#password_lama').css({"border-color" : "red"});
                $('#text-error-password_lama').text('* Silahkan isi password lama terlebih dahulu');
                $('#text-error-password_lama').css({"font-style" : "italic"});
                $('#text-error-password_lama').css({"color" : "red"});
            }else{
                $('#password_lama').css({"border-color" : "#dee2e6"});
                $('#text-error-password_lama').hide();
            }
			if($('#password_baru').val().length == 0){
                $('#password_baru').css({"border-color" : "red"});
                $('#text-error-password_baru').text('* Silahkan isi password baru terlebih dahulu');
                $('#text-error-password_baru').css({"font-style" : "italic"});
                $('#text-error-password_baru').css({"color" : "red"});
            }else{
                if ($('#password_baru').val().length !== $('#ulang_password').val().length) {
                    $('#password_baru').css({"border-color" : "red"});
                    $('#text-error-password_baru').text('* password baru tidak sama dengan ulang password');
                    $('#text-error-password_baru').css({"font-style" : "italic"});
                    $('#text-error-password_baru').css({"color" : "red"});
                }else{
                    $('#password_baru').css({"border-color" : "#dee2e6"});
                    $('#text-error-password_baru').hide();
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
                $('#form-pelanggan2').submit();
        }
    });
    </script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>