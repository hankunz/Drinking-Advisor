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
	
	//The local time
	var localTime = new Date().toLocaleTimeString();
	//The day 
	var localDay = new Date().toLocaleDateString().slice(2,3);
  
	for(count;count<userDrinksArray.length;count++)
	{
		if(userDrinksArray[count].alcohol !== 0)
		{
			//The amount of ethanol measured with a standard of 10 grams
			ethanol = userDrinksArray[count].alcohol;
			
			//Time of day drink was added
			var timeAdded = userDrinksArray[count].timeAdded;			
			//Day drink was added
			var dateAdded = userDrinksArray[count].dateAdded.slice(8,10);
			
			
			if(    parseInt(localDay) ==  parseInt(dateAdded) ||   parseInt("0" + localDay) ==  parseInt(dateAdded)  ||
				parseInt(localDay) ==  parseInt("0" + dateAdded)
			)
			{
			
				//Hour drink was added
				var timeAddHr = parseInt(timeAdded.slice(0,timeAdded.length - 9));
				var timeAddMin = parseInt(timeAdded.slice(timeAdded.length - 8,timeAdded.length - 6));
				//AM or PM of when drink was added
				var timeAddTimed = timeAdded.slice(timeAdded.length - 13,timeAdded.length);
				
				//Current hour and minutes
				var timeHr = parseInt(localTime.slice(0,localTime.length - 9));
				var timeMin = parseInt(localTime.slice(localTime.length - 8,localTime.length - 6));
				//Currently AM or PM
				var timeTimed = localTime.slice(localTime.length - 13,localTime.length);
			
				
					
				//Adjust for a 24 hours cycle			
				if(timeTimed == "PM" || timeTimed == " PM")
					if(timeHr != 12)
						timeHr += 12;
				if(timeAddTimed == "pm" || timeAddTimed == " pm")
					if(timeAddHr != 12)
						timeAddHr += 12;
					
				
				console.debug("time of drink" + timeAddTimed);
				
				console.debug("Drink:"+ userDrinksArray[count].name);
				console.debug("Hr Since:"+ timeHr +" - "+ timeAddHr);
				console.debug("Min Since:"+ (timeMin - timeAddMin));
				
				hoursSince = timeHr - timeAddHr;
				
				minutesSince = timeMin - timeAddMin;
				minutesSince = minutesSince/60;
				
				hoursSince = hoursSince + minutesSince;
				
				console.debug("Hours Since:"+ hoursSince);
				
				if(hoursSince >=0)
				{
					
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
					
									
					if((((0.806 * ethanol * 1.2) / (constant1*weight)) - (constant2*hoursSince)) >= 0)
						BAC += ((0.806 * ethanol * 1.2) / (constant1*weight)) - (constant2*hoursSince);
				
					console.debug("BAC: " + (((0.806 * ethanol * 1.2) / (constant1*weight)) - (constant2*hoursSince)));
						
					//BAC += ((ethanol/(weight * constant1))*(constant2*hoursSince)*1.15);
					
				}
			}

				
		}		
		
		
	}	
	
	BAC = Math.round(BAC * 1000) / 1000
	
	return BAC;
	
	//pure ethanol drink = (vol (ml)*alcohol*0.8)/100
	//BAC  ethanol wgt/(person wgt * <.7forM   .6forW>)
	//weight = weight* <.1forM  .085forW>
}