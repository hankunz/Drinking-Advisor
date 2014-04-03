/**
* This method adds the day's total drink information
* to the week
*
* @method addToWeek
*
*/
function resetDay()
{
	var localDay = new Date().toLocaleDateString().slice(2,3);
	var count = 0;
	
	
	for(count;count<userDrinksArray.length;count++)
	{
		var dateAdded = userDrinksArray[count].dateAdded.slice(8,10);
		
		if(parseInt(localDay) ==  parseInt(dateAdded)+7)	
		{	
			userDrinksArray.splice(count, 1);	
		}
	}	
	
}
