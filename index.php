<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý bán hàng</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/css/bootstrap.min.css">

	<style>
		.btn-submit {
			color: #2d4d69;
    		background-color: #d9d166;
     		border-color: #f291a3;
		}

		.btn {
			cursor: pointer;
			display: inline-block;
			font-weight: 400;
     		line-height: 1.5;
     		text-align: center;
     		text-decoration: none;
     		vertical-align: middle;
		}

		.cn {
			background-color: #bde4d5;
		}
	</style>	
</head>
<body>

<div class="container cn">

	<div class="col-sm-4">
		<form action="insert.php" method="POST">
			<div class="form-group">
			    <label for="exampleInputEmail1">Mã mặt hàng: </label>
			    <input type="text" class="form-control" name="MAMH" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mặt hàng" required="">
			</div>

			 <div class="form-group">
			    <label for="exampleInputEmail1">Tên mặt hàng: </label>
			    <input type="text" class="form-control" name="TENMH" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tên hàng" required="">
			</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">Loại mặt hàng: </label>
			    <input type="text" class="form-control" name="LOAIMH" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter loại hàng" required="">
			</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">Số lương: </label>
			    <input type="text" class="form-control" name="SOLUONG" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter số lượng" required="">
			</div>

			<div class="form-group">
			    <label for="exampleInputEmail1">Đơn giá: </label>
			    <input type="text" class="form-control" name="DONGIA" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter đơn giá" required="">
			</div>



			<button type="submit" class="btn btn-submit" name="submit">Submit</button>
		</form>
	</div>
	<div class="col-sm-12">
		<table class="table">
			<tr><th>ID</th><th>Mã mặt hàng</th><th>Tên mặt hàng</th> <th>Loại hàng</th><th>Số lượng</th><th>Đơn giá</th></tr>
			<?php include 'display.php' ?>
		</table>
	</div>
</div>
<script src="js/js.js" type="text/javascript"></script>
<script src="css/js/bootstrap.js" type="text/javascript"></script>
<script src="css/js/bootstrap.min.js" type="text/javascript"></script>
<script src="css/js/npm.js" type="text/javascript"></script>
</body>
</html>