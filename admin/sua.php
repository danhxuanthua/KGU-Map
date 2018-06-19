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
	<script src="js/kiemtranhap.js"></script>
	<style type="text/css">
		.error{
			color: red;
			padding-left: 5px;
		}
	</style>
</head>


<?php 
require('banner.php');
require('config.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$sql = "SELECT * FROM markers WHERE id = '$id'";
$run= mysqli_query($conn, $sql);
$dong = mysqli_fetch_array($run);
?>


<div class="container divformthem">
	<br>
	<a class="btn btn-sm btn-info" href="index.php"><span class="glyphicon glyphicon-triangle-left"></span>QUAY LẠI</a>
	<h2 style="text-align: center;color: #3479b8">SỬA ĐỊA ĐIỂM</h2>
	<form id="formThem" action="xuly.php?id=<?php echo $dong['id']?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="pwd">Tên địa điểm:</label>
			<input type="text" class="form-control" value="<?php echo $dong['name'] ?>" name="tendiadiem" id="tendiadiem">
		</div>
		<div class="form-group">
			<label for="pwd">Địa chỉ:</label>
			<input type="text" class="form-control" value="<?php echo $dong['address'] ?>" name="diachi" id="diachi">
		</div>
		<div class="form-group">
			<label for="pwd">Lat:</label>
			<input type="text" class="form-control" value="<?php echo $dong['lat'] ?>" name="lat" id="lat">
		</div>
		<div class="form-group">
			<label for="pwd">Lng:</label>
			<input type="text" class="form-control" value="<?php echo $dong['lng'] ?>" name="lng" id="lng">
		</div>
		<div>
			<input type="submit" class="btn btn-primary" name="sua" value="SỬA">
		</div>
	</form>
</div>
