<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="./public/css/index.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<style type="text/css">
	.error{
		color: red;
		padding-left: 5px;
	}
</style>
</head>
<body>
	
	<?php	
	require('banner.php');
	require('them.php');
	echo "<br>";
	require('lietke.php');
	require('footer.php');
	?>
</body>

</html>