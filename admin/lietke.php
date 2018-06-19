<?php
require('config.php');
$sql = "SELECT * FROM markers";
$ketqua = mysqli_query($conn, $sql);
mysqli_query($conn, "SET character_set_results=utf8");
mb_language('uni');
mb_internal_encoding('UTF-8');

?>
<div class="container divformlietke">
<table class="container table" width="100%">
<tr style="background: #3479b8;color: #fff">
<td>ID</td>
<td>Tên địa điểm</td>
<td>Địa chỉ</td>
<td>Lat</td>
<td>Lng</td>
<td colspan="2">Quản lý</td>

<?php 

$i = 0;
while ($dong = mysqli_fetch_assoc($ketqua)){
	?>
	<tr>
		<td><?php echo $dong['id'] ?></td>
		<td><?php echo $dong['name'] ?></td>
		<td><?php echo $dong['address'] ?></td>
		<td><?php echo $dong['lat'] ?></td>
		<td><?php echo $dong['lng'] ?></td>
		<td><a class="btn btn-sm btn-info" href="sua.php?id=<?php echo $dong['id'] ?>">Sửa</a></td>
		<td><a class="btn btn-sm btn-info" href="xuly.php?id=<?php echo $dong['id'] ?>">Xóa</a></td>
	</tr>

	<?php 
	$i++;
}
?>

</table>
</div>
