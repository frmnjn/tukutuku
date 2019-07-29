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
		<a class="btn btn-primary" href="<?php echo base_url('home_admin/'); ?>" role="button">Back to Menu</a><br><br>
		<a class="btn btn-success" href="<?php echo base_url('home_admin/create_account'); ?>" role="button">Create account</a>
		<table class="table table-striped">
			<tr>
				<th>ID Account</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Password Asli</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>Foto Account</th>
				<th>Command</th>
			</tr>
			<?php
			foreach($account as $i){
				echo "<tr>";
				echo "<td>". $i->id_account."</td>";
				echo "<td>". $i->fullname."</td>";
				echo "<td>". $i->email."</td>";
				echo "<td>". $i->username."</td>";
				echo "<td>".$i->password."</td>";
				echo "<td>".$i->password_asli."</td>";
				echo "<td>".$i->gender."</td>";
				echo "<td>".$i->address."</td>";
				echo "<td>".$i->phone_number."</td>";
				?>
				<td><img src="<?php echo base_url("$i->foto_account"); ?>" style="height: 100px; width: 100px;"></td>
				<td><a href="<?php echo base_url("crud/edit_account/$i->id_account"); ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
					<a href="<?php echo base_url("crud/hapus_account/$i->id_account"); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')""><i class="glyphicon glyphicon-trash"></i></a></td>
					<?php
					echo "</tr>";
				}?>
			</table>

		</div>

	</body>
	</html>
