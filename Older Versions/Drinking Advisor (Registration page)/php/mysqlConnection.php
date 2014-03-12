		<?php
		$username="admin";
		$password="admin";
		$dbname="CSCI3130-Pro";
		$host="localhost";
		
		$con=mysqli_connect($host,$username,$password,$dbname);
		
		if (mysqli_connect_errno())
  			{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}
  			?>
