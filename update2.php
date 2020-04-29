<?php 
 $size=sizeof($_POST);
 $records=$size/4;
 for($i=1;$i<=$records;$i++)
 {
  $index1="itemid".$i;
  $itemid[$i]=$_POST[$index1];
  $index2="item".$i;
  $item[$i]=$_POST[$index2];
  $index3="price".$i;
  $price[$i]=$_POST[$index3];
  $index4="company".$i;
  $company[$i]=$_POST[$index4];
 }
 
 $con = mysqli_connect('localhost','root','','bss');

 mysqli_select_db($con,'bss');
 
 for($i=1;$i<=$records;$i++)
 {
  $q="update store SET item='$item[$i]', price=$price[$i], company='$company[$i]' where itemid=$itemid[$i]";
  mysqli_query($con,$q);
 }
 
 

 mysqli_close($con);
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Update items</title>
	</head>
	<body>
		<h1>BHUPAT SPORTS STORE</h1>
		<p>
			<?php
				
				echo $size."Record Updated";  
				
			?>
		
		</p>
		<h2>Go back to home ? <a href="home.php">Click Here</a></h2>
		
	</body>
</html>