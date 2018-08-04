<?php
$host='localhost';
$username='root';
$password='';
$db='dbtest';

	
	$conn = mysqli_connect($host,$username,$password,$db);
	
	if($conn === true)
	{
		echo"hii";
	}
	else
	echo"oops";
	
	
	?>