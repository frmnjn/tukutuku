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
		<a class="btn btn-primary" href="<?php echo base_url('home_admin/manage_iklan'); ?>" role="button">Back to Menu</a>
		<form action="<?php echo base_url(). 'home_admin/create_iklan_detail'; ?>" method="post" enctype="multipart/form-data">
			<table class="table table-striped">
				<tr>
					<td>ID Penjual</td>
					<td>
						<div class="col-sm-4">
							<input type="number" name="id_account" class="form-control" value="">
						</div>
					</td>
				</tr>
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