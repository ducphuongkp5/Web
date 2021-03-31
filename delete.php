<?php
	include './connect.php';
	// xuất hiện trên thanh địa chỉ là : 
	// http://127.0.0.1/php/2203MySQL_PHP/delete.php?id=22
	// nó sẽ GET id là 22 vì id là 22
	// mà delete.php?id=22 xuất hiện ở đâu là chính trong file display.php
	// có line 14 có delete.php?id= 
	// còn ".$row['id'] ." là nó sẽ in ra id á nè
	// thử ấn ctrl + shift + i or f12 trên chrome rồi tìm tới thẻ a đó là sẽ thấy từng cái từng id khác nhau
	// tương tự edit cũng vậy
	$id = $_GET['id'];

	$sql = "delete from banhang where id = $id";
	if(mysqli_query($conn,$sql)){
		//header('Location: index.php');
		echo " Thành công";
	}else{
		echo"Error".mysqli_error($conn);
	}
?>