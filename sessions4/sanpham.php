<?php  
include 'connect.php';
?>
<?php
	$costerr = $nameerr = $date = "";
	 $cost = $name = "";
	 $date = date("Y-m-d");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 if (empty($_POST["cost"])) {
         $costErr = "nhập giá";
      }else {
         $cost = $_POST["cost"];
      }
       if (empty($_POST["name"])) {
         $nameErr = "nhập tên sản phẩm";
      }else {
         $name = $_POST["name"];
      }
       $sql = "INSERT INTO danhmucsanpham (cost,name,date) VALUES ('$cost', '$name','$date')";

      if ($conn->query($sql) === TRUE) {

          echo "Users update successfully.";
          echo "<a href='select.php'>Go to list users</a>";

      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
	}
	
?>
<form action = "sanpham.php" method = "post">
      Mã sản phẩm: <input type="text" name="name">
      <span class = "error">* <?php echo $nameerr;?></span>
      <br>
      Giá : <input type="number" name="cost" min="0" max="50000" step="500">
      <span class = "error">* <?php echo $costerr;?></span>
      <br>
      <input type="submit">
   </form>