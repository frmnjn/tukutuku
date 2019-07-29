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
				<a class="navbar-brand font-logo" style="color: white;" href="<?php echo base_url("home_admin"); ?>" ><span class="glyphicon glyphicon-briefcase"></span> TUKU-TUKU STORE</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url("home/logout") ?>" style="color: white;">Sign Out</a></li>
				</ul>
			</div>

		</div>
	</nav> <!-- akhir header -->
	<div class="container-fluid" id="atas">
		<a class="btn btn-primary" href="<?php echo base_url('home_admin/manage_account'); ?>" role="button">Back to Menu</a>
		<form action="<?php echo base_url(). 'home_admin/create_account_detail'; ?>" method="post">
			<table class="table table-striped">
				<tr>
					<td>Fullname</td>
					<td>
						<div class="col-sm-4">
							<input type="text" name="fullname" class="form-control" value="">
						</div>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<div class="col-sm-4">
							<input type="text" name="email" class="form-control" value="">
						</div>
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>
						<div class="col-sm-4">
							<input type="text" name="username" class="form-control" value="">
						</div>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<div class="col-sm-4">
							<input type="text" name="password" class="form-control" value="">
						</div>
					</td>
				</tr>
				<tr>
					<td>Foto Account</td>
					<td>
						<div class="col-sm-4">
							<?php  ?>
							<img src="<?php echo base_url("images/default-profile.jpg") ?>" style="height: 300px;width: 200px;">
							<input type="file" name="nama_foto">
						</div>
					</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<div class="col-sm-4">
							<div class="radio">
								<label><input type="radio" name="gender" value="Male">Male</label>
								<label><input type="radio" name="gender" value="Female">Female</label>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>
						<div class="col-sm-4">
							<input type="text" name="address" class="form-control" value="">
						</div>
					</td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>
						<div class="col-sm-4">
							<input type="text" name="phone_number" class="form-control" value="">
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