<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		#atas{
			margin-top: 60px;
		}

		#kiri{
			margin-left: 250px;
		}

		#show{
			display: inline-block;
			width: 30px;
			height: 30px;
			color: white;
		}

		#login-dp{
			min-width: 300px;
			padding: 14px 14px 0;
			overflow:hidden;
			background-color:rgba(105,105,105,.9);
		}
		#login-dp .form-group {
			margin-bottom: 10px;
		}

		.logo-sosmed{
			width: 30px;
			height: 30px;
		}

		.footer-bs{
			margin-left: 100px;
		}

		@media(max-width:768px){
			#login-dp{
				background-color: inherit;
				color: #fff;
			}
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
		<form class="navbar-form navbar-right" name="cari" method="get" action="<?php echo base_url("home/search");?>">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search" name="keyword">
			</div>
			<button type="submit" class="btn btn-default">Cari</button>
		</form>
	</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> <!-- akhir header -->
<?php foreach ($iklan as $i) {
	$foto = $i->foto_barang;?>
	<!-- Page Content -->
	<div class="container" id="atas">
		<div class="row">
			<div class="col-md-4">
				<h1>Iklan Details</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<img src="<?php echo base_url("$foto") ?>" style="width: 200px; height: 200px;">
			</div>
			<div class="row">
				<div class="col-md-6" style="margin-left: 20px;">
					<table class="table">
						<tr>
							<td>ID Iklan</td>
							<td><?php echo $i->id_iklan; ?></td>
						</tr>
						<tr>
							<td>Nama Barang</td>
							<td><?php echo $i->judul?></td>
						</tr>
						<tr>
							<td>Penjual</td>
							<?php foreach ($account as $a) {
								$penjual = $a->username;
							} ?>
							<td><a href="<?php echo base_url("home/account_details/$penjual") ?>"><?php echo $penjual; ?></a> </td>
						</tr>
						<tr>
							<td>Harga</td>
							<td>Rp. <?php echo $i->harga; ?>,-</td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td><?php echo $i->kategori; ?></td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td><?php echo $i->deskripsi; ?></td>
						</tr>
						<tr>
							<td>Komentar</td>
							<td><textarea cols="50">asd</textarea> </td>
						</tr>
						<tr>
							<td></td>
							<td><a href="" class="btn btn-primary">Buy</a><input type="submit" class="btn btn-success" value="Comment"></td>
						</tr>
					</table>
				</div>
			</div>

		</div>
	</div>
	<?php } ?>

	<div class="container">
		<!--= Footer -->
		<hr>
		<footer class="footer-bs ">
			<div class="row">
				<div class="col-md-3 footer-brand">
					<h3 class="font-logo"><span class="glyphicon glyphicon-phone"></span>PHONEMARKET</h3>
					<p>Beli produk segala macam handphone di toko kami. Jual barang dagangan anda di website kami. Mudah aman dan nyaman.</p>
					<p>© 2017 TUKU-TUKU STORE</p>
				</div>
				<div class="col-md-9 footer-nav">
					<div class="col-md-3">
						<h4>Pembeli</h4>
						<a href="#">Cara Belanja</a><br>
						<a href="#">Pembayaran</a><br>
						<a href="#">Jaminan Aman</a><br>
						<a href="#">Beli Produk Trending</a><br>
						<a href="#">Produk Terkini</a><br>
					</div>
					<div class="col-md-3">
						<h4>Penjual</h4>
						<a href="#">Cara Belanja</a><br>
						<a href="#">Cara Berjualan</a><br>
						<a href="#">Keuntungan Berujualan</a><br>
						<a href="#">Tips Berjualan</a><br>
						<a href="#">Panduan Fitur Diskon</a><br>
						<a href="#">Direktori Pajak</a><br>
					</div>
					<div class="col-md-5">
						<h4>Ikuti kami di</h4>
						<a href="#"><img src="<?php echo base_url('images/fbb.png'); ?>" class="logo-sosmed"></a>
						<a href="#"><img src="<?php echo base_url('images/ig.png'); ?>" class="logo-sosmed"></a>
						<a href="#"><img src="<?php echo base_url('images/twt.png'); ?>" class="logo-sosmed"></a>
						<a href="#"><img src="<?php echo base_url('images/path.png'); ?>" class="logo-sosmed"></a>
						<a href="#"><img src="<?php echo base_url('images/youtubee.png'); ?>" class="logo-sosmed"></a>
						<a href="#"><img src="<?php echo base_url('images/g.png'); ?>" class="logo-sosmed"></a>
					</div>
				</div>
			</div>
		</footer>	
	</div>
</body>
</html>