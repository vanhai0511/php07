<?php include 'connect.php'; ?>
<?php 
$sql = "SELECT * FROM `danhmucsanpham` WHERE id =2";
$result = $conn->query($sql);
?>
	<h1>liệt kê sản phảm</h1>
	<a href='sanpham.php'>Add users</a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Mã sản phẩm</th>
				<th>Giá</th>
				<th>Ngày nhập</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$id = $row["id"];
				$date = $row["date"];
				echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["cost"]."</td>";
					echo "<td>".$row["date"]."</td>";
			}
		 }else{
			 	echo "0 results";
	 		  }
	 			$conn->close();
	 	?>
		</tbody>
	</table>
	