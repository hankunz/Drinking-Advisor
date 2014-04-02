<?php

//if the session is set or the user is logged in
if(isset( $_SESSION['userId'])){


// query to get count all DrinkId for drinks added by the logged in user
	$getDrinkIdCountQuery ="SELECT COUNT(*) FROM `Drink` WHERE Id='$userId';";

//open database connection
	require 'php/mysqlConnection.php';

// run getDrinkIdQuery query
$getDrinkIdCountQueryResult=mysqli_query($con,$getDrinkIdCountQuery);

// extracting the count value
  			while($row = mysqli_fetch_array($getDrinkIdCountQueryResult))
   			 {
   				$getDrinkIdCountQueryResultVal=$row['COUNT(*)'];   		 
   		 	 }

// if the count is zero or there are no rows entered by this user, then close the database connection
if($getDrinkIdCountQueryResultVal==0){

// giving a status for no drinks in js
echo "<script>  var drinkStatus=0;  </script> ";

// closing database connection
mysqli_close($con);
}

// otherwise don't close the database connection and proceed with teh following code
else if($getDrinkIdCountQueryResultVal>0){

// query to get all the drinkId of drinks added by the current user
	$getAllDrinkIdQuery ="SELECT DrinkId FROM Drink WHERE Id='$userId';";

// run getAllDrinkIdQuery
	$getAllDrinkIdQueryResult=mysqli_query($con,$getAllDrinkIdQuery);

// creating an array to hold the DrinkId values
$drinkIds = array();

// extracting all the DrinkId values
	while($row = mysqli_fetch_array($getAllDrinkIdQueryResult))
   	{
   	$getAllDrinkIdQueryResultVal= $row['DrinkId'];   	
   	array_push($drinkIds,$getAllDrinkIdQueryResultVal);	 
   	}

// initializing a js array to hold the following to be exported objects
echo "<script> var userDrinksArray=new Array(); </script> ";

// for loop to go through the array and retrieve all the drinks info regarding each drink
for($i=0;$i<count($drinkIds);$i++){
 
// query to retrieve the drink name
$getDrinkNameQuery ="SELECT Name FROM DrinkInfo WHERE DrinkId='$drinkIds[$i]';";

// query to retrieve the drink volume
$getDrinkVolumeQuery ="SELECT Volume FROM DrinkInfo WHERE DrinkId='$drinkIds[$i]';";

// query to retrieve the drink sugar
$getDrinkSugarQuery ="SELECT Sugar FROM DrinkInfo WHERE DrinkId='$drinkIds[$i]';";

// query to retrieve the drink calories
$getDrinkCaloriesQuery ="SELECT Calories FROM DrinkInfo WHERE DrinkId='$drinkIds[$i]';";

// query to retrieve the drink alcohol
$getDrinkAlcoholQuery ="SELECT Alcohol FROM DrinkInfo WHERE DrinkId='$drinkIds[$i]';";

// query to retrieve the drink vitamin c
$getDrinkVitamincQuery ="SELECT Vitaminc FROM DrinkInfo WHERE DrinkId='$drinkIds[$i]';";

// query to retrieve the drink  added date
$getDrinkDateAddedQuery ="SELECT DateAdded FROM Drink WHERE DrinkId='$drinkIds[$i]';";

// query to retrieve the drink  added date
$getDrinkTimeAddedQuery ="SELECT TimeAdded FROM Drink WHERE DrinkId='$drinkIds[$i]';";

// running all the queries
$getDrinkNameQueryResult=mysqli_query($con,$getDrinkNameQuery);
$getDrinkVolumeQueryResult=mysqli_query($con,$getDrinkVolumeQuery);
$getDrinkSugarQueryResult=mysqli_query($con,$getDrinkSugarQuery);
$getDrinkCaloriesQueryResult=mysqli_query($con,$getDrinkCaloriesQuery);
$getDrinkAlcoholQueryResult=mysqli_query($con,$getDrinkAlcoholQuery);
$getDrinkVitamincQueryResult=mysqli_query($con,$getDrinkVitamincQuery);
$getDrinkDateAddedQueryResult=mysqli_query($con,$getDrinkDateAddedQuery);
$getDrinkTimeAddedQueryResult=mysqli_query($con,$getDrinkTimeAddedQuery);

//extracting the values


  			while($row = mysqli_fetch_array($getDrinkNameQueryResult))
   			 {
   				$getDrinkNameQueryResultVal=$row['Name'];   		 
   		 	 }
   		 	 while($row = mysqli_fetch_array($getDrinkVolumeQueryResult))
   			 {
   				$getDrinkVolumeQueryResultVal=$row['Volume'];   		 
   		 	 }
   		 	 while($row = mysqli_fetch_array($getDrinkSugarQueryResult))
   			 {
   				$getDrinkSugarQueryResultVal=$row['Sugar'];   		 
   		 	 }
   		 	 while($row = mysqli_fetch_array($getDrinkCaloriesQueryResult))
   			 {
   				$getDrinkCaloriesQueryResultVal=$row['Calories'];   		 
   		 	 }
   		 	 while($row = mysqli_fetch_array($getDrinkAlcoholQueryResult))
   			 {
   				$getDrinkAlcoholQueryResultVal=$row['Alcohol'];   		 
   		 	 }
   		 	 while($row = mysqli_fetch_array($getDrinkVitamincQueryResult))
   			 {
   				$getDrinkVitamincQueryResultVal=$row['Vitaminc'];   		 
   		 	 }
   		 	 while($row = mysqli_fetch_array($getDrinkDateAddedQueryResult))
   			 {
   				$getDrinkDateAddedQueryResultVal=$row['DateAdded'];   		 
   		 	 }
			 while($row = mysqli_fetch_array($getDrinkTimeAddedQueryResult))
   			 {
   				$getDrinkTimeAddedQueryResultVal=$row['TimeAdded'];   		 
   		 	 }
   		 	 
// exporting the values as js objects and place them inside the already defined array
echo "<script>		 drink$i=new Object();			drink$i.name=\"$getDrinkNameQueryResultVal\";		drink$i.dateAdded=\"$getDrinkDateAddedQueryResultVal\";	    drink$i.timeAdded=\"$getDrinkTimeAddedQueryResultVal\";		drink$i.volume=\"$getDrinkVolumeQueryResultVal\";		drink$i.sugar=\"$getDrinkSugarQueryResultVal\";		drink$i.calories=\"$getDrinkCaloriesQueryResultVal\";		drink$i.alcohol=\"$getDrinkAlcoholQueryResultVal\";		drink$i.vitaminc=\"$getDrinkVitamincQueryResultVal\";                     </script> ";
echo "<script>  userDrinksArray.push(drink$i)  </script> ";

// giving a status for existing drinks in js
echo "<script>  var drinkStatus=1;  </script> ";

}


// closing database connection
mysqli_close($con);
}
}

?>