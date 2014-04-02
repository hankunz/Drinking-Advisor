<?php
				// this code is to fill the select menu options
				
				//if the session is set or the user is logged in
				if(isset( $_SESSION['userId'])){
				
				// query to get count of all predefined drinks
				$getPreDefinedDrinkCountQuery ="SELECT COUNT(*) FROM `PreDefinedDrink`;";
				
				//open database connection
				require 'php/mysqlConnection.php';
				
				// run getPreDefinedDrinkCountQuery 
				$getPreDefinedDrinkCountQueryResult=mysqli_query($con,$getPreDefinedDrinkCountQuery);
				
				// extracting the count value
  				while($row = mysqli_fetch_array($getPreDefinedDrinkCountQueryResult))
   					 {
   						$getPreDefinedDrinkCountQueryResultVal=$row['COUNT(*)'];   		 
   		 			 }
   		 			 $options='';
   		 			if($getPreDefinedDrinkCountQueryResultVal==0){
   		 			$options='-';
   		 			}
   		 			else if($getPreDefinedDrinkCountQueryResultVal>0){
   		 			
   		 			// query to retrieve predefined drinks names
   		 			$getPreDefinedDrinkNameQuery ="SELECT Name FROM `PreDefinedDrink`;";
   		 			
   		 			// run getPreDefinedDrinkNameQuery
   		 			$getPreDefinedDrinkNameQueryResult=mysqli_query($con,$getPreDefinedDrinkNameQuery);
   		 			
   		 			for($i=0;$i<$getPreDefinedDrinkCountQueryResultVal;$i++){
   		 			
   		 			while($row = mysqli_fetch_array($getPreDefinedDrinkNameQueryResult))
   					 {
   						$options.="<option>".$row['Name']."</option>";   		 
   		 			 }
   		 			
   		 			}
   		 			
   		 			
   		 			
   		 			}
				// closing database connection
				mysqli_close($con);
				}
				
				
				?>