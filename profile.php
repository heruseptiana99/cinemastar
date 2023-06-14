<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account Profile CinemaStar</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5 ms-1 text-center">Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<!-- <img src="" alt="Image" class="shadow"> -->
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
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>ID User</label>
								  	<input type="number" class="form-control" value="<?= $id_user ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nama Lengkap</label>
								  	<input type="text" class="form-control" value="<?= $nama ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="<?= $email ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>No Telepon</label>
								  	<input type="text" class="form-control" value="<?= $telp ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	<label>Foto</label>
									<input type="file" class="form-control" rows="4"></input>
								</div>
							</div>
						</div>
						<div>
							<button href="#" class="btn btn-primary">Update</button>
							<a href="index.html" class="btn btn-light">Cancel</a>

						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button href="#" class="btn btn-primary">Update</button>
							<a href="index.html" class="btn btn-light">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>