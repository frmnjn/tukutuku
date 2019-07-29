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

<div class="container" id="atas">
	<h3><span class="glyphicon glyphicon-envelope"></span> Messages</h3>
	<table class="table table-striped">
		<tr>
			<td>ID Pesan</td>
			<td>Pengirim</td>
			<td>Pesan</td>
			<td>Action</td>
		</tr>
		<?php foreach ($pesan as $p) {
			echo "<tr>";
				echo "<td>$p->id_pesan</td>";
				echo "<td>$p->pengirim</td>";
				echo "<td>$p->pesan</td>";
				$id = $p->id_pesan;
				$user = $p->id_account;
				?>
				<td><a class="btn btn-danger" href="<?php echo base_url("home/hapus_pesan/$id/$user"); ?>"><span class="glyphicon glyphicon-trash"> </span></a></td>
				<?php } ?>
			</tr>
		</table>


	</div>
</body>
</html>