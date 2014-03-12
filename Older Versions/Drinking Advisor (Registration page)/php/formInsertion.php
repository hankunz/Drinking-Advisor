<?php
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
  		
  		
  		// insert email and password
  		$insertEmailAndPassword ="INSERT INTO Login (Email, Password, Id) VALUES ('$email', '$password', 'Null');";
  		// retrieve id query
  		$retrieveId ="SELECT Id FROM Login WHERE Email='$email';";
  		
  		
  														
  		
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
  		$insertProfileInfo ="INSERT INTO Profile (Id, Name, Age, Height, Weight, Gender, Country) VALUES ('$idVal', '$fullName', '$age', '$height', '$weight', '$gender', '$country');";
  		// run profile entry query
  		mysqli_query($con,$insertProfileInfo);

		// closing the sql connection
		mysqli_close($con);
}
?>
