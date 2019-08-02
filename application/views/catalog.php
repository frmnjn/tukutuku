<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
			color: black;
			height: auto;
			width: auto;
			background: rgb(50,50,50);
		}
		#navbar-menu{
			font-size: 18px;
			font-weight: normal;
			letter-spacing: 1px;
			line-height: 38px;
			padding: 10px;
			margin-left: 13%;
		}

		#nav-bar{
			background: rgba(10, 10, 10, 0.9);
			border: 0;
		}

		#nav-bar img{
			width: 40px;
			height: auto;
			margin-top: 15px;
		}

		#navbar-menu a{
			color: white;
			margin: 5px;
		}
		#navbar-menu #aa{
			margin-left: 100px;
		}

		#navbar-menu button{
			margin-top: 15px;
			margin-right: -100px;
		}

		#navbar-menu ul li a{
			color: black;
		}

		#section1{
			background-image: url('cover.jpg');  
			background-size: cover;      
			background-repeat: no-repeat;        
			position: relative;
			padding: 20em;     
			border: 0;
			font-weight: bold;
		}

		#section1 h2, #section1 p{
			font-weight: bold;
			color: orange;
		}

		#s1footer{
			color: white;
			border: 0;
			background: rgb(50,50,50);
		}

		#s1footer h4{
			color: grey;
		}

		#gallery-carousel{
			width: 100%;
		}

		#aa{
			font-size: 14px;

		}

		#jing{
			margin-top: 100px;
		}

	</style>
</head>
<body data-spy="scroll" data-target="#main-navbar">
	<nav id="nav-bar"class="navbar navbar-default navbar-fixed-top" id="main-navbar" role="navigation">
		<div class="container">
			<div class ="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">toggle navigate</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="v_admin.php"><img src="<?php echo base_url('Capture.png'); ?>" alt="Capture" border="0"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul id="navbar-menu" class="nav navbar-nav">	
					<li><a href="<?php echo base_url('crud/home'); ?>">Home</a></li>
					<li><a href="<?php echo base_url('crud/kirim_data_ke_catalog'); ?>">Catalog</a></li>
					<li><a href="faq.html">How to Order</a></li>
					<li><a id="aa" href="faq.html">Welcome, <?php echo $this->session->userdata('nama')?> </a></li>
					<li><button type="button" class="btn btn-default btn-sm">
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart $0.00 (0 items)</button></li>
						<li><a id="aa" href="<?php echo base_url('login/logout'); ?>">Log Out</a></li>	
					</ul>
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row" id="jing">
			<div class="col-lg-12">
				<h3 style="color: white;">Daftar Iklan</h3>
			</div>
		</div>
		<!-- /.row -->

		<!-- Page Features -->
		<?php
		foreach($iklan as $i){
			?>
			<div class="row text-center">

				<div class="col-md-3 col-sm-6 hero-feature">
					<div class="thumbnail">
						<img src="http://placehold.it/800x500" alt="">
						<div class="caption">

							<h3><?php echo $i->judul?></h3>
							<p>Rp. <?php echo $i->harga?>,-</p>
							<p><?php echo $i->deskripsi?></p>
							<p>
								<a href="#" class="btn btn-primary">Beli</a>
								<a href="#" class="btn btn-info">View Details</a>
							</p>
						</div>
					</div>
				</div>


</div>

				<!-- /.row -->
				<?php } ?>
			
			<hr>
		</div>
		



			<br><br>
			<footer>
				<section id="address">
					<div class="well">
						<div class="row">
							<div class="col-lg-4">
								<p>To send us a message, use the contact form or the information below.</p>
								<address>
									<strong>Kukingkang .Corp</strong><br>
									<span class="glyphicon glyphicon-envelope"></span> your Email adress goes here<br>
									<span class="glyphicon glyphicon-home"></span> your detail address goes here<br>
									<span class="glyphicon glyphicon-earphone"></span><abbr title="Phone"> P: </abbr>+6281237891273
								</address>
								<p>&copy; Ex-Telkom_Coders </p>
							</div>
						</div>	
					</div>
				</section>
			</footer>	

		</body>
		</html>