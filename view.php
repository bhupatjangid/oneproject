<?php
	$con = mysqli_connect('localhost','root','','bss');

	mysqli_select_db($con,'bss');
	
	$q="Select * from store";
	$result=mysqli_query($con,$q);
	
	$num=mysqli_num_rows($result);
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Shop Records</title>
		<link rel="stylesheet" href="css/viewstyle.css">
	</head>
	<body>
		<h1>BHUPAT SPORTS STORE</h1>
		
		<table id="view_table">
			<tr>
				<th>Item Id</th>
				<th>Item</th>
				<th>Price</th>
				<th>Company</th>
			</tr>
			<?php
				for($i=1;$i<=$num;$i++)
				{
					$row=mysqli_fetch_array($result); 
			?>
				<tr>
				<td><?php echo $row['itemid']; ?></td>
				<td><?php echo $row['item']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['company']; ?></td>
			</tr>
			<?php		
				}
			?>
		</table>
		
	</body>
</html>