<?php
	$item=$_POST['item'];
	$price=$_POST['price'];
	$company=$_POST['company'];
	
	$con = mysqli_connect('localhost','root','','bss');

	mysqli_select_db($con,'bss');
	
	$q="INSERT INTO store (item,price,company) values('$item',$price,'$company')";
	$status=mysqli_query($con,$q);
	mysqli_close($con);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>insert</title>
	</head>
	<body>
		<h1>BHUPAT SPORTS STORE</h1>
		<p>
			<?php
				if($status==1)
				{
					echo "Record Inserted";  
				}
				else
				{
					echo "Insertion Failed";
				}
			?>
		
		</p>
		<h2>Do you want to insert more records ? <a href="insert1.php">Click Here</a></h2>
		<h2>Do you want to go to HOME Page ? <a href="home.php">Click Here</a></h2>
	</body>
</html>