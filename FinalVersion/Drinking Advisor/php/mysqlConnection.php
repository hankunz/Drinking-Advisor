		<?php
		
		// setting the default timezone to halifax
  		date_default_timezone_set('America/Halifax');
  		
  		
		$username="root";
		$password="root";
		$dbname="CSCI3130-Pro";
		$host="localhost";
		
		$con=mysqli_connect($host,$username,$password,$dbname);
		
		if (mysqli_connect_errno())
  			{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}
  			?>