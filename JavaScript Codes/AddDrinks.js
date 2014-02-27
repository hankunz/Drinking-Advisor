function addToWeek()
{
	//At the end of the day, add to the week
	if(week.length()<=7)
		week.push(total);
	else
	{	
		week = [];
		week.push(total);
	}
}



function addToToday(justDrank)
{
	if (total.day==null)
	{
		
		total.drinks.push(justDrank);
		total.day = justDrank.today;
		total.alcohol = justDrank.alcohol;
		total.calories = justDrank.calories;
		total.sugar = justDrank.sugar;
		total.price = justDrank.price;
		
	}
	else
	{
		total.day += justDrank.today;
		total.alcohol += justDrank.alcohol;
		total.calories += justDrank.calories;
		total.sugar += justDrank.sugar;
		total.price += justDrank.price;
		
	}
}