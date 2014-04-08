/**
* This method adds the day's total drink information
* to the week
*
* @method addToWeek
*
*/
function ResetDay()
{
	
	var today = new Date().getDay();
	var count = 0;
	
	
	for(count;count<userDrinksArray.length;count++)
	{
	
		var dayOfDrink = new Date(userDrinksArray[count].dateAdded).getDay();
		if (dayOfDrink == today+1 || dayOfDrink == today+6)
		{	
			userDrinksArray.splice(count, 1);
		}			
	}	
	
}
