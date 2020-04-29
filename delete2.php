<?php 
 $size=sizeof($_POST);
 $j=1;
 for($i=1;$i<=$size;$i++,$j++)
 {
	 $index="b".$j;
	 if(isset($_POST[$index]))
	 {
		 $b_id[$i]=$_POST[$index];
	 }
	 else
		 $i--;
 }
 $con = mysqli_connect('localhost','root','','bss');

 mysqli_select_db($con,'bss');
 for($k=1;$k<=$size;$k++)
 {
	 $q="delete from store where itemid=".$b_id[$k];
	 mysqli_query($con,$q);
 }
 mysqli_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>deletion</title>
	</head>
	<body>
		<h1>BHUPAT SPORTS STORE</h1>
		<p>
			<?php
				
				echo $size."Record Deleted";  
				
			?>
		
		</p>
		<h2>Go back to home ? <a href="home.php">Click Here</a></h2>
		
	</body>
</html>