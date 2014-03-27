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

/**
* This method takes recent drink information
* and uses it to approximate the user's blood alcohol content
*
* @method approxAlcohol
*
*/
function approxAlcohol(name)
{
	//Initialize variables to be used in the final equation
    var constant1;
    var constant2;
    var count=0;
    var BAC=0;
  
    //Read the entire drinks array  
	for(count;count<drinks.length();count++)
	{
		//If there is alcohol in the drink
		if(drinks[count].alcohol !== 0)
		{
			//get the ethanol content and the time since the last drink
			ethanol = drinks[count].alcohol;
			hoursSince = date.getTime() - drinks[count].time;
			hoursSince = hoursSince/1000/60/60;  //milliseconds to hours
			
			//Set the constants based on gender
			if(gender == 'M')
			{	
				constant1 = 0.7;
				constant2 = 0.1;
			}
			else
			{	
				constant1 = 0.6;
				constant2 = 0.085;
			}
								
			//Find the approximate blood alcohol content
			BAC += ((ethanol/(weight * constant1))*(constant2*hoursSince));
		
		}		
		
		
	}	
	
	
	return BAC;
	
	//pure ethanol drink = (vol (ml)*alcohol*0.8)/100
	//BAC  ethanol wgt/(person wgt * <.7forM   .6forW>)
	//weight = weight* <.1forM  .085forW>
}