/**
* This method takes some user information
* and uses it to calculate the BMI of the user
*
* @method findBMI
*
*/
function findBMI()
{		
	 var BMI = (weight / (height*height)) * 703;
	 return BMI;
}



function findEthanolPercent()
{
	var volume = 500;
	var percentage = 40;
	
	var ethanol = (volume*percentage)/100;
	
	return ethanol;

}



/**
* This method takes recent drink information
* and uses it to approximate the user's blood alcohol content
*
* @method approxAlcohol
*
*/
function approxAlcohol()
{
	
    //<?php
	//$user= mysqli_query($connect,"SELECT weight,gender FROM Profile where id = 'name' "); ?>

	//var user = <?php echo json_encode($user); ?>
	
	
    var constant1;
    var constant2;
    var count=0;
    var BAC=0;
	var localTime = new Date().toLocaleTimeString();
  
	for(count;count<userDrinksArray.length;count++)
	{
		if(userDrinksArray[count].alcohol !== 0)
		{
			//The amount of ethanol measured with a standard of 10 grams
			ethanol = userDrinksArray[count].alcohol/10;
			
			var timeAdded = userDrinksArray[count].timeAdded;
			
			var timeAdd = parseInt(timeAdded.slice(0,timeAdded.length - 9) + timeAdded.slice(timeAdded.length - 8,timeAdded.length - 6));
			var time = parseInt(localTime.slice(0,localTime.length - 9) + localTime.slice(localTime.length - 8,localTime.length - 6));
			
			hoursSince = time - timeAdd;
			hoursSince = hoursSince/1000/60/60;  //milliseconds to hours
				
			if(gender == 'M')
			{	
				constant1 = 0.58;
				constant2 = 0.015;
			}
			else
			{	
				constant1 = 0.49;
				constant2 = 0.017;
			}
			
			//BAC += ((ethanol/(weight * constant1))*(constant2*hoursSince));
			BAC += (0.806 * ethanol * 1.2) / (constant1*weight) - (constant2*hoursSince)
		
		}		
		
		
	}	
	
	
	return BAC;
	
	//pure ethanol drink = (vol (ml)*alcohol*0.8)/100
	//BAC  ethanol wgt/(person wgt * <.7forM   .6forW>)
	//weight = weight* <.1forM  .085forW>
}