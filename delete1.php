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
		<title>delete</title>
		<link rel="stylesheet" href="css/viewstyle.css">
	</head>
	<body>
		<h1>BHUPAT SPORTS STORE</h1>
		<form action="delete2.php" method="post">
		
		<table id="view_table">
			<tr>
				<th>Item Id</th>
				<th>Item</th>
				<th>Price</th>
				<th>Company</th>
				<th>Select to delete</th>
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
				<td><input type="checkbox" value="<?php echo $row['itemid']; ?>" name="b<?php echo $i; ?>"/></td>
			</tr>
			<?php		
				}
			?>
		<tr>
			<td colspan="5"><input type="submit" value="Delete" /><td>
		</tr>
		</table>
		</form>
		
	</body>
</html>