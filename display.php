<?php
	include './connect.php';
	$sql = "select * from banhang";

	$query = $conn->query($sql);

	if($query->num_rows > 0){
		while($row = $query->fetch_assoc()){
			echo "<tr>";
				echo "<td>" . $row['ID']."</td>";
				echo "<td>" . $row['MAMH']."</td>";
				echo "<td>" . $row['TENMH']."</td>";
				echo "<td>" . $row['LOAIMH']."</td>";
				echo "<td>" . $row['SOLUONG'] . "</td>";
				echo "<td>" . $row['DONGIA'] . "</td>";
				
				echo "<td><a href=edit.php?id=".$row['ID']." class='btn btn-success'>Edit</a></td>";
				echo "<td><a href=delete.php?id=".$row['ID']." class='btn btn-info'>Delete</a></td>";
			echo "</tr>";
		}
	}else {
  		echo "0 results";
	}

?>