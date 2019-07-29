<!DOCTYPE html>
<html>
<head>
  <title>Administrator Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    #atas{
      margin-top: 50px;
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
  <h1>Welcome, admin</h1>
    <a class="btn btn-primary" href="<?php echo base_url('home_admin/manage_iklan'); ?>" role="button">Manage Iklan</a>
    <a class="btn btn-primary" href="<?php echo base_url('home_admin/manage_account'); ?>" role="button">Manage Account</a>
  </div>

</body>
</html>