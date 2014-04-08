		 	<?php

require 'php/functions.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){	


	// this if statement will distinct between the two forms within the same form. First: select from options. Second: add the drink details.
	if(preventScript($_POST["SelectDrink"])==1){
	
  		// filling form inputs into respectable variables
  		$drinkName = preventScript($_POST["drinkName"]);
  		$drinkVolume = preventScript($_POST["drinkVolume"]);
  		$drinkCalories = preventScript($_POST["drinkCalories"]);
  		$drinkSugar = preventScript($_POST["drinkSugar"]);
  		$drinkAlcohol = preventScript($_POST["drinkAlcohol"]);
		$drinkAlcohol = ($drinkVolume*$drinkAlcohol)/100; 
		
  		$drinkVitaminc = preventScript($_POST["drinkVitaminc"]);
  		
  		//validation
  		// checking if the user has inputed any values, in those cases the code create an error message
  		if($drinkName=='Enter the name of the drink. E.g. Orange Juice'){
  		$drinkNameErr='You have not entered a drink name!';
  		}
  		// checking if the user has inputed any values, in those cases the code create an error message
  		if($drinkVolume=='Enter the volume (ml.). E.g. 355'){
  		$drinkVolumeErr='You have not entered a drink volume!';
  		}
  		// if the user enters something other than numbers
  		else if(!is_numeric($drinkVolume)){
  		$drinkVolumeErr='You have not entered a number for the volume!';
  		}
  		// checking if the user has inputed any values, in those cases the code create an error message
  		if($drinkCalories=='Enter the drink\'s calories. E.g. 50'){
  		$drinkCaloriesErr='You have not entered a drink calories!';
  		}
  		// if the user enters something other than numbers
  		else if(!is_numeric($drinkCalories)){
  		$drinkCaloriesErr='You have not entered a number for the calories!';
  		}
  		// checking if the user has inputed any values, in those cases the code create an error message
  		if($drinkSugar=='Enter the drink\'s sugar. E.g. 20'){
  		$drinkSugarErr='You have not entered a drink sugar!';
  		}
  		// if the user enters something other than numbers
  		else if(!is_numeric($drinkSugar)){
  		$drinkSugarErr='You have not entered a number for the sugar!';
  		}
  		// checking if the user has inputed any values, in those cases the code create an error message
  		if($drinkAlcohol=='Enter the drink\'s alcohol percentage. E.g. 5'){
  		$drinkAlcoholErr='You have not entered a drink alcohol percentage!';
  		}
  		// if the user enters something other than numbers
  		else if(!is_numeric($drinkAlcohol)){
  		$drinkAlcoholErr='You have not entered a number for the alcohol!';
  		}
  		// checking if the user has inputed any values, in those cases the code create an error message
  		if($drinkVitaminc=='Enter the drink\'s Vitamin c. E.g. 3'){
  		$drinkVitamincErr='You have not entered a drink vitamin C!';
  		}
  		// if the user enters something other than numbers
  		else if(!is_numeric($drinkVitaminc)){
  		$drinkVitamincErr='You have not entered a number for the vitamin C!';
  		}
  		
  		// if there are no errors, the validation passes
  		if(!isset($drinkNameErr) && !isset($drinkVolumeErr) && !isset($drinkCaloriesErr) && !isset($drinkSugarErr) && !isset($drinkAlcoholErr) && !isset($drinkVitamincErr)){
  		
  		// if a user is logged in, session is created
  		if(isset( $_SESSION['userId'])){
  		

  		// storing the current time in a variable
  		$currentTime=date("g:i:s a");
  		
  		// variable to retrieve date in the format 2014-01-01
  		$currentDate=date("Y-m-d");
  		
  		// query to insert drink name, date added and user id who added it
  		$setDrinkQuery="INSERT INTO `Drink` (`DrinkId`, `Id`, `DateAdded`, `TimeAdded`) VALUES (NULL, '$userId', '$currentDate', '$currentTime');";
  		
  		// query to retrieve the drinkId that has just been inserted
  		$getDrinkIdQuery ="SELECT `DrinkId` FROM `Drink` WHERE `Id`='$userId' AND `DateAdded`='$currentDate' AND `TimeAdded`='$currentTime';";
  		
  		// opening database connection
  		require 'php/mysqlConnection.php';	
  		
  		// run setDrinkQuery
  		mysqli_query($con,$setDrinkQuery);
  		
  		// run getDrinkIdQuery
  		$getDrinkIdQueryResult=mysqli_query($con,$getDrinkIdQuery);
  		
  		// extracting the value from the result
  		while($row = mysqli_fetch_array($getDrinkIdQueryResult))
   			{
   			 $getDrinkIdQueryResultVal=$row['DrinkId'];   		 
   			}
  		
  		// query to insert drink info.
  		$setDrinkInfoQuery="INSERT INTO `DrinkInfo` (`DrinkId`, `Name`, `Volume`, `Sugar`, `Calories`, `Alcohol`, `Vitaminc`) VALUES ('$getDrinkIdQueryResultVal', '$drinkName', '$drinkVolume', '$drinkSugar', '$drinkCalories', '$drinkAlcohol', '$drinkVitaminc');";
  		
  		// run setDrinkInfoQuery
  		mysqli_query($con,$setDrinkInfoQuery);
  		
  		// closing the sql connection
		mysqli_close($con);
  		
  		}
  		
  		}
  		}
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		// the other form case
  		else{
  		// getting the selected drink option
  		$selectedDrinkName = preventScript($_POST["SelectDrink"]);
  		$drinkVolume = preventScript($_POST["drinkVolume"]);
  		
  		// if the user didnt chose any option i.e default option
  		if($selectedDrinkName=='Select the type of the drink'){
  		$drinkChoiceErr='You have not selected any drink!';
  		}
  		// if the user didnt enter a volume for the selected drink
  		else if($drinkVolume=='Enter the volume (ml.). E.g. 355'){
  		$drinkVolumeErr='You have not entered a drink volume!';
  		}
  		
  		
  		// if there are no errors, the validation passes
  		if(!isset($drinkChoiceErr) && !isset($drinkVolumeErr)){
  		
  		// if a user is logged in, session is created
  		if(isset( $_SESSION['userId'])){
  		
  		// queries to get selected drink info
  		$getPreDefinedSugarQuery ="SELECT Sugar FROM PreDefinedDrink WHERE Name='$selectedDrinkName';";
  		$getPreDefinedCaloriesQuery ="SELECT Calories FROM PreDefinedDrink WHERE Name='$selectedDrinkName';";
  		$getPreDefinedAlcoholQuery ="SELECT Alcohol FROM PreDefinedDrink WHERE Name='$selectedDrinkName';";
  		$getPreDefinedVitamincQuery ="SELECT Vitaminc FROM PreDefinedDrink WHERE Name='$selectedDrinkName';";
  		
  		// establishing database connection
  		require 'php/mysqlConnection.php';
  		
  		// running previous queries
  		$getPreDefinedSugarQueryResult=mysqli_query($con,$getPreDefinedSugarQuery);
  		$getPreDefinedCaloriesQueryResult=mysqli_query($con,$getPreDefinedCaloriesQuery);
  		$getPreDefinedAlcoholQueryResult=mysqli_query($con,$getPreDefinedAlcoholQuery);
  		$getPreDefinedVitamincQueryResult=mysqli_query($con,$getPreDefinedVitamincQuery);
  		
  		//extracting the values
  		while($row = mysqli_fetch_array($getPreDefinedSugarQueryResult))
   			 {
   				$getPreDefinedSugarQueryResultVal=$row['Sugar'];   		 
   		 	 }
   		while($row = mysqli_fetch_array($getPreDefinedCaloriesQueryResult))
   			 {
   				$getPreDefinedCaloriesQueryResultVal=$row['Calories'];   		 
   		 	 }
   		while($row = mysqli_fetch_array($getPreDefinedAlcoholQueryResult))
   			 {
   				$getPreDefinedAlcoholQueryResultVal=$row['Alcohol'];   		 
   		 	 }
   		while($row = mysqli_fetch_array($getPreDefinedVitamincQueryResult))
   			 {
   				$getPreDefinedVitamincQueryResultVal=$row['Vitaminc'];   		 
   		 	 }
  		
  	
  		// storing the current time in a variable
  		$currentTime=date("g:i:s a");
  		
  		// variable to retrieve date in the format 2014-01-01
  		$currentDate=date("Y-m-d");
  	
  	

  		// query to insert drink name, date added and user id who added it
  		$setDrinkQuery="INSERT INTO `Drink` (`DrinkId`, `Id`, `DateAdded`, `TimeAdded`) VALUES (NULL, '$userId', '$currentDate', '$currentTime');";
  		
  		// query to retrieve the drinkId that has just been inserted
  		$getDrinkIdQuery ="SELECT `DrinkId` FROM `Drink` WHERE `Id`='$userId' AND `DateAdded`='$currentDate' AND `TimeAdded`='$currentTime';";
  		
  		
  		// run setDrinkQuery
  		mysqli_query($con,$setDrinkQuery);
  		
  		// run getDrinkIdQuery
  		$getDrinkIdQueryResult=mysqli_query($con,$getDrinkIdQuery);
  		
  		// extracting the value from the result
  		while($row = mysqli_fetch_array($getDrinkIdQueryResult))
   			{
   			 $getDrinkIdQueryResultVal=$row['DrinkId'];   		 
   			}
  		
  		// query to insert drink info.
  		$setDrinkInfoQuery="INSERT INTO `DrinkInfo` (`DrinkId`, `Name`, `Volume`, `Sugar`, `Calories`, `Alcohol`, `Vitaminc`) VALUES ('$getDrinkIdQueryResultVal', '$selectedDrinkName', '$drinkVolume', '$getPreDefinedSugarQueryResultVal', '$getPreDefinedCaloriesQueryResultVal', '$getPreDefinedAlcoholQueryResultVal', '$getPreDefinedVitamincQueryResultVal');";
  		
  		// run setDrinkInfoQuery
  		mysqli_query($con,$setDrinkInfoQuery);
  		
  		// closing the sql connection
		mysqli_close($con);
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  	
  		
  		}
  		
  		
  		
  		}
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		
  		}
  		
  	
  		
  		}

					 	?>