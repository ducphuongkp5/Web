<?php
	include ('connect.php');

	if(isset($_POST['submit'])){
		$MAMH = $_POST['MAMH'];
		$TENMH = $_POST['TENMH'];
		$LOAIMH = $_POST['LOAIMH'];
		$SOLUONG= $_POST['SOLUONG'];
		$DONGIA= $_POST['DONGIA'];
	}

	$sql = "insert into banhang (MAMH, TENMH, LOAIMH, SOLUONG, DONGIA) values ('$MAMH', '$TENMH', '$LOAIMH', '$SOLUONG', '$DONGIA')";

	if(mysqli_query($conn,$sql)){
		header('Location: index.php');
	}else{
		echo"Error".mysqli_error($conn);
	}
?>
