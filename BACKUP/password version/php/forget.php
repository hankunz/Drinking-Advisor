<?php
require 'php/functions.php'; 				 	 
						if ($_SERVER["REQUEST_METHOD"] == "POST"){
							
						// preventing js tags then storing entered username and password in php variables	
						$enteredEmail = preventScript($_POST["email"]);
						
						
						// initializing database connection
						require 'php/mysqlConnection.php';
						
						
						// query to get count of usernames existing in database that matches the entered username (email)
  						$getCountQuery ="SELECT COUNT(*) FROM Login WHERE Email = '$enteredEmail';";
						
						// run previous count query
  						$getCountQueryResult=mysqli_query($con,$getCountQuery);
						
						// extracting the count from the getCountQueryResult and storing it in a new variable
  						while($row = mysqli_fetch_array($getCountQueryResult))
   						 {
   						 $count=$row['COUNT(*)'];   		 
   		 				 }
						
						// checking if the entered username or password were empty
						if($enteredEmail=='Enter your email'){
						$noEmail= 'You have not entered any email!';
						}
						
						else{
						
						// checking if the entered username does not exist in the registered users table
						if($count==0){
						$noAccount= 'You have entered a non existing email, please register for an account first!';
						}
						// if the username exists
						else if($count==1){
						
						// retrieve password query
  						$getEmailQuery ="SELECT * FROM Login WHERE Email='$enteredEmail';";
  						
  					    $getEmailQueryResultVal=$row['email'];   		 

  					
   		 				//checking if the entered password matches the actual password for this username
   		 				if($enteredEmail==$getEmailQueryResultVal){
   		 				
   		 				// retrieve id query
  						$getIdQuery ="SELECT Id FROM Login WHERE Email='$enteredEmail';";
  						
  						// run id retrieval query
  						$getIdQueryResult=mysqli_query($con,$getIdQuery);
  						
  						// closing the database connection
  						mysqli_close($con);
  						
  						// extracting the id value from the query and storing the value in a new variable
  						while($row = mysqli_fetch_array($getIdQueryResult))
   		 				{
   						 $getIdQueryResultVal=$row['Id'];   		 
   					    }
   					    
   		 				
   		 				exit();
   		 				}
   		 				
						
						}
						
						
						}
						
						
						}
							
						
						?>
						
						