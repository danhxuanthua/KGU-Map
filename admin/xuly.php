<?php 
require('config.php');
$tendiadiem = $_POST['tendiadiem'];
$diachi = $_POST['diachi'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

if (isset($_GET['id'])){
	$id = $_GET['id'];
}


if (isset($_POST['them'])) {
	$sql = "INSERT INTO markers (name, address, lat, lng) VALUES ('$tendiadiem','$diachi','$lat','$lng')";
	mysqli_query($conn, $sql);
	header('location: index.php');

}else if ($_POST['sua']) {
		//sửa
	$sql = "UPDATE markers SET name='$tendiadiem', address='$diachi', lat='$lat', lng='$lng' WHERE id ='$id'";
	mysqli_query($conn, $sql);
	header('location: index.php');
}else {
	//xóa
	$sql = "DELETE FROM markers WHERE id = '$id'";
	mysqli_query($conn, $sql);
	header('location:index.php');
}
?>