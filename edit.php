<?php
	error_reporting(E_ALL & ~E_NOTICE);
	include './connect.php';

	$id = $_GET['id'];

	$sql = mysqli_query($conn, "select * from banhang where id = $id");

	$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
	// ở đây mình chỉ query một mảng là chỉ lấy một dòng mà id = $id mình GET ở dòng số 4
	// để echo những cái mình select được trong id mình get được đó
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa hàng</title>
	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="css/css/bootstrap.min.css">
	
	
</head>
<body>
<div class="container">
	<div class="col-sm-6">
		<?php
			if(isset($_POST['submit'])){
				$MAMH = $_POST['MAMH'];
				$TENMH = $_POST['TENMH'];
				$LOAIMH = $_POST['LOAIMH'];
				$SOLUONG= $_POST['SOLUONG'];
				$DONGIA= $_POST['DONGIA'];


				$sql = "update banhang set MAMH = '$MAMH', TENMH = '$TENMH', LOAIMH = '$LOAIMH', SOLUONG='$SOLUONG', DONGIA='$DONGIA' where id = $id";
				// update lại đây tương tự với insert vậy
				if(mysqli_query($conn,$sql)){
					header('Location: index.php');
				}else{
					echo"Error".mysqli_error($conn);
			 	 }
			}
		?>
		<form action="" method="POST">
			<div class="form-group">
			    <label for="exampleInputEmail1">Mã mặt hàng: </label>
			    <input type="text" class="form-control" name="MAMH" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mặt hàng" required="">
			</div>

			 <div class="form-group">
			    <label for="exampleInputEmail1">Tên mặt hàng: </label>
			    <input type="text" class="form-control" name="TENMH" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mặt hàng" required="">
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


	
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
</div>
<script src="js/js.js" type="text/javascript"></script>
<script src="css/js/bootstrap.js" type="text/javascript"></script>
<script src="css/js/bootstrap.min.js" type="text/javascript"></script>
<script src="css/js/npm.js" type="text/javascript"></script>
</body>
</html>