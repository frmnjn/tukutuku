<!DOCTYPE html>
<html>
<head>
	<title>Look</title>
</head>
<body>
<?php 
	foreach ($kategori as $k) {
		echo $k->id_kategori;
		echo $k->nama_kategori;
	}
?>
</body>
</html>