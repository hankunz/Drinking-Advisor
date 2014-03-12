function findBMI()
{		
	 var BMI = (weight / (height*height)) * 703;
	 return BMI;
}


function ApproxAlcohol(name)
{
    var constant1;
    var constant2;
    var count=0;
    var BAC=0;
  
	for(count;count<drinkCount;count++)
	{
		if(drinks[count].alcohol !== 0)
		{
			ethanol = drinks[count].alcohol;
			hoursSince = date.getTime() - drinks[count].time;
			hoursSince = hoursSince/1000/60/60;  //milliseconds to hours
				
			if(gendre == 'M')
			{	
				constant1 = 0.7;
				constant2 = 0.1;
			}
			else
			{	
				constant1 = 0.6;
				constant2 = 0.085;
			}
								
			
			BAC += ((ethanol/(weight * constant1))*(constant2*hoursSince));
		
		}		
		
		
	}	
	
	
	return BAC;
	
	//pure ethanol drink = (vol (ml)*alcohol*0.8)/100
	//BAC  ethanol wgt/(person wgt * <.7forM   .6forW>)
	//weight = weight* <.1forM  .085forW>
}