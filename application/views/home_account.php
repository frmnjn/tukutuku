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

<div class="container" id="atas">
	<div class="row">
		<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
			<br>
			<p class=" text-info">May 05,2014,03:00 pm </p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

			
			<?php
			foreach($account as $i){
				?>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span><?php echo "$i->fullname" ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url("$i->foto_account"); ?>" class="img-circle img-responsive"> </div>


							<div class=" col-md-9 col-lg-9 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td>Fullname</td>
											<td><?php echo "$i->fullname" ?></td>
										</tr>
										<tr>
											<td>Email</td>
											<td><a href="mailto:<?php echo "$i->email" ?>"><?php echo "$i->email" ?></a></td>
										</tr>
										<tr>
											<td>Username</td>
											<td><?php echo "$i->username" ?></td>
										</tr>

										<tr>
											<tr>
												<td>Gender</td>
												<td><?php echo "$i->gender" ?></td>
											</tr>
											<tr>
												<td>Address</td>
												<td><?php echo "$i->address" ?></td>
											</tr>
											<td>Phone Number</td>
											<td><?php echo "$i->phone_number" ?>
											</td>

										</tr>

									</body>
								</table>

								<a href="<?php echo base_url("home_member/home_edit_account/$i->id_account") ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i>Edit Profile</a>
								<a href="<?php echo base_url("home_member/create_iklan/$i->id_account") ?>" class="btn btn-primary">Create Iklan</a>
								<a href="<?php echo base_url("home_member/manage_iklan/$i->id_account") ?>" class="btn btn-success">View Iklan</a>

							</div>
						</div>
					</div>
					<?php if($this->session->userdata('nama') == $i->username){?>
					<div class="panel-footer">
						<a data-original-title="Broadcast Message" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i> Send Message to Administrator</a>
						<?php $user = $this->session->userdata('nama'); ?>
						<a href="<?php echo base_url("home/view_message/$i->id_account"); ?>" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-save-file"></i> View Message</a>

						
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<form method="post" action="<?php echo base_url("home/send_message_admin/$i->username"); ?>">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Send Message to Administrator</h4>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="comment">Message:</label>
												<textarea class="form-control" rows="5" name="message"></textarea>
											</div>
										</div>
										<div class="modal-footer">

											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<input type="submit" class="btn btn-success" value="Send Message">
										</form>
									</div>
								</div>

							</div>
						</div>
						<span class="pull-right">	
						</span>
					</div>
					<?php } else { ?>
					<div class="panel-footer">
						<a data-original-title="Broadcast Message" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i> Send Message to <?php echo $i->username; ?></a>
						
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
							<?php $sender = $this->session->userdata('nama') ?>
								<form method="post" action="<?php echo base_url("home/send_message/$sender/$i->id_account"); ?>">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Send Message to <?php echo $i->username; ?></h4>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="comment">Message:</label>
												<textarea class="form-control" rows="5" name="message"></textarea>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<input type="submit" class="btn btn-success" value="Send Message">
										</div>
									</form>
								</div>
							</div>
						</div>
						<span class="pull-right">	
						</span>
					</div>
					<?php } ?>

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