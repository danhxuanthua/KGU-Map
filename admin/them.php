<script src="js/kiemtranhap.js"></script>


<div class="container divformthem">
	<h2 style="text-align: center;color: #3479b8">THÊM ĐỊA ĐIỂM</h2>
	<form id="formThem" action="xuly.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="pwd">Tên địa điểm:</label>
			<input type="text" class="form-control" size="50" name="tendiadiem" id="tendiadiem">
		</div>
		<div class="form-group">
			<label for="pwd">Địa chỉ:</label>
			<input type="text" class="form-control" name="diachi" id="diachi">
		</div>
		<div class="form-group">
			<label for="pwd">Lat:</label>
			<input type="text" class="form-control" name="lat" id="lat">
		</div>
		<div class="form-group">
			<label for="pwd">Lng:</label>
			<input type="text" class="form-control" name="lng" id="lng">
		</div>
		<div>
			<input type="submit" class="btn btn-primary" name="them" value="THÊM">
		</div>
	</form>
</div>