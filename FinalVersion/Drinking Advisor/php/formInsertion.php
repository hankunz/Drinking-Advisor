<?php
require 'php/functions.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST"){	
  		
	
	

  		// filling form inputs into respectable variables
  		$fullName = preventScript($_POST["name"]);
  		$password = preventScript($_POST["password"]);
  		$country = preventScript($_POST["country"]);
  		$email = preventScript($_POST["email"]);
  		$age = preventScript($_POST["age"]);
  		$gender = preventScript($_POST["genderType"]);
  		$height = preventScript($_POST["height"]);
  		$weight = preventScript($_POST["weight"]);
  		
  		// calculating Bmi and storing it in a variable
  		$Bmi= round(($weight / pow($height/100, 2)),1);
  		
  		// insert email and password
  		$insertEmailAndPassword ="INSERT INTO `Login` (`Email`, `Password`, `Id`) VALUES ('$email', '$password', Null);";
  		// retrieve id query
  		$retrieveId ="SELECT `Id` FROM `Login` WHERE Email='$email';";
  		
  		// initializing database connection
  			require 'php/mysqlConnection.php';	
  													
  		// query to get count of usernames existing in database that matches the entered email
  		$getCountQuery ="SELECT COUNT(*) FROM `Login` WHERE Email = '$email';";
						
		// run previous count query
  		$getCountQueryResult=mysqli_query($con,$getCountQuery);
						
		// extracting the count from the getCountQueryResult and storing it in a new variable
  			while($row = mysqli_fetch_array($getCountQueryResult))
   			 {
   				$count=$row['COUNT(*)'];   		 
   		 	 }
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		if($count==1){
  		// making an error message
  		 $existingAccountError="* The email you have entered is already associated with a user account, please register again with a different email.";
  		}
  		else{
  		
  		// run email and password entry query
  		mysqli_query($con,$insertEmailAndPassword);
  		// run id retrieval query
  		$id=mysqli_query($con,$retrieveId);
  		
  		
  		// extracting the id value from the query and storing the value in a new variable
  		while($row = mysqli_fetch_array($id))
   		 {
   		 $idVal=$row['Id'];   		 
   		 }
  		
  	
  						
  		// insert profile info query
  		$insertProfileInfo ="INSERT INTO `Profile` (`Id`, `Name`, `Age`, `Height`, `Weight`, `Gender`, `Country`, `Bmi`) VALUES ('$idVal', '$fullName', '$age', '$height', '$weight', '$gender', '$country', '$Bmi');";
  		  
  		// run profile entry query
  		mysqli_query($con,$insertProfileInfo)or die(mysql_error().'DID NOT ADD');
  		
  		

		// redirecting to the home page after successful registration
		header("Location: ./index.php");
   		exit();


		// closing the sql connection
		mysqli_close($con);
		}
}
?>
