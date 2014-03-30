<?php
// if the session was created
if(isset( $_SESSION['userId'])){
$userId=$_SESSION['userId'];

//query to retrieve name
$getNameQuery ="SELECT Name FROM Profile WHERE Id='$userId';";
//query to retrieve age
$getAgeQuery ="SELECT Age FROM Profile WHERE Id='$userId';";
//query to retrieve height
$getHeightQuery ="SELECT Height FROM Profile WHERE Id='$userId';";
//query to retrieve weight
$getWeightQuery ="SELECT Weight FROM Profile WHERE Id='$userId';";
//query to retrieve gender
$getGenderQuery ="SELECT Gender FROM Profile WHERE Id='$userId';";
//query to retrieve country
$getCountryQuery ="SELECT Country FROM Profile WHERE Id='$userId';";
//query to retrieve BMI
$getBmiQuery ="SELECT Bmi FROM Profile WHERE Id='$userId';";

// initializing database connection
require 'php/mysqlConnection.php';

// run previous queries
$getNameQueryResult=mysqli_query($con,$getNameQuery);
$getAgeQueryResult=mysqli_query($con,$getAgeQuery);
$getHeightQueryResult=mysqli_query($con,$getHeightQuery);
$getWeightQueryResult=mysqli_query($con,$getWeightQuery);
$getGenderQueryResult=mysqli_query($con,$getGenderQuery);
$getCountryQueryResult=mysqli_query($con,$getCountryQuery);
$getBmiQueryResult=mysqli_query($con,$getBmiQuery);

// closing the database connection
mysqli_close($con);

// extracting the name value from the query and storing the value in a new variable
	while($row = mysqli_fetch_array($getNameQueryResult))
   	{
   	 $getNameQueryResultVal=$row['Name'];   		 
   	}

	while($row = mysqli_fetch_array($getAgeQueryResult))
   	{
   	 $getAgeQueryResultVal=$row['Age'];   		 
   	}
   	
   	while($row = mysqli_fetch_array($getHeightQueryResult))
   	{
   	 $getHeightQueryResultVal=$row['Height'];   		 
   	}
   	
   	while($row = mysqli_fetch_array($getWeightQueryResult))
   	{
   	 $getWeightQueryResultVal=$row['Weight'];   		 
   	}
   	
   	while($row = mysqli_fetch_array($getGenderQueryResult))
   	{
   	 $getGenderQueryResultVal=$row['Gender'];   		 
   	}
   	
   	while($row = mysqli_fetch_array($getCountryQueryResult))
   	{
   	 $getCountryQueryResultVal=$row['Country'];   		 
   	}
   	while($row = mysqli_fetch_array($getBmiQueryResult))
   	{
   	 $getBmiQueryResultVal=$row['Bmi'];   		 
   	}
   	
   	

// outputing the logged in user's data as Js variables
echo "<script> var name='$getNameQueryResultVal'; </script> ";
echo "<script> var age='$getAgeQueryResultVal'; </script> ";
echo "<script> var height='$getHeightQueryResultVal'; </script> ";
echo "<script> var weight='$getWeightQueryResultVal'; </script> ";
echo "<script> var gender='$getGenderQueryResultVal'; </script> ";
echo "<script> var country='$getCountryQueryResultVal'; </script> ";

}



?>
