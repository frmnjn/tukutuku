<!DOCTYPE html>
<html>
<head>
	<title>Administrator Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		#atas{
			margin-top: 55px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand font-logo" style="color: white;" href="<?php echo base_url("home"); ?>" ><span class="glyphicon glyphicon-briefcase"></span> TUKU-TUKU STORE</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart $0.00</a></li>
					<?php
					if($kiw == 'y'){?>
					<?php $namaaa = $this->session->userdata('nama')?>
					<li><a href="<?php echo base_url("home/account_details/$namaaa"); ?>">Welcome, <?php echo $this->session->userdata('nama')?></a></li>
					<li><a href="<?php echo base_url("home/logout") ?>">Sign Out</a></li>
					<?php
				} else{?>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
					<ul class="dropdown-menu" id="login-dp">
						<div class="row">
							<div class="col-xs-12">
								<form class="form" role="form" method="post" action="<?php echo base_url("home/register");?>" accept-charset="UTF-8" id="login-nav">
									<div class="form-group">
										<input type="text" name="fullname" class="form-control" placeholder="Fullname" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="text" name="username" class="form-control" placeholder="Username" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="radio" style="color: white;">
											<label><input type="radio" name="gender" value="Male">Male</label>
											<label><input type="radio" name="gender" value="Female">Female</label>
										</div>
									</div>
									<div class="form-group">
										<input type="address" name="address" class="form-control" placeholder="Address" required>
									</div>
									<div class="form-group">
										<input type="phone_number" name="phone_number" class="form-control" placeholder="Phone Number" required>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
									</div>
								</form>
							</div>
						</div>
					</ul>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					<ul class="dropdown-menu" id="login-dp">
						<div class="row">
							<div class="col-xs-12">
								<form class="form" role="form" method="post" action="<?php echo base_url("home/login");?>" accept-charset="UTF-8" id="login-nav">
									<div class="form-group">
										<label class="sr-only" for="exampleInputEmail2">Username</label>
										<input type="text" name="username" class="form-control" placeholder="Username" required>
									</div>
									<div class="form-group">
										<label class="sr-only" for="exampleInputPassword2">Password</label>
										<input id="asd" type="password" name="password" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">Sign in</button>
									</div>
								</form>
							</div>
						</div>
					</ul>
				</li>
				<?php
			}
			?>


		</ul>
		<form class="navbar-form navbar-right" name="cari" method="GET">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Cari</button>
		</form>
	</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> <!-- akhir header -->
<div class="container-fluid" id="atas">
	<?php $namaaa = $this->session->userdata('nama')?>
	<a class="btn btn-primary" href="<?php echo base_url("home/account_details/$namaaa"); ?>" role="button">Back to Menu</a>
	<form action="<?php echo base_url("home_member/create_iklan_detail/$id_account"); ?>" method="post" enctype="multipart/form-data">
		<table class="table table-striped">
			<tr>
				<td>Judul</td>
				<td>
					<div class="col-sm-4">
						<input type="text" name="judul" class="form-control" value="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>
					<div class="col-sm-4">
						<input type="file" name="nama_foto" value="upload">
					</div>
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>
					<div class="col-sm-4">
						<input type="text" name="harga" class="form-control" value="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<div class="col-sm-4">
						<select class="form-control" id="sel1" name="kategori">
							<option>Pakaian</option>
							<option>Makanan & Minuman</option>
							<option>Elektronik</option>
							<option>Otomotif</option>
							<option>Fotografi</option>
							<option>Kesehatan</option>
							<option>Kecantikan</option>
							<option>Rumah Tangga</option>
						</select>
					</div>
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>
					<div class="col-sm-6">
						<textarea  name="deskripsi" class="form-control"></textarea>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" class="btn btn-success" value="Simpan">
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>