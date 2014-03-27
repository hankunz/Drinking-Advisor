/**
* This method adds the day's total drink information
* to the week
*
* @method addToWeek
*
*/
function addToWeek()
{
	//At the end of the day, add to the week
	if(week.length()<7)
		week.push(total);
	else
	{
		week = [];
		week.push(total);
	}
}


/**
* This method adds the drink information
* to the daily totals
*
* @method addToToday
*
*/
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
		total.drinks.push(justDrank);
		total.day += justDrank.today;
		total.alcohol += justDrank.alcohol;
		total.calories += justDrank.calories;
		total.sugar += justDrank.sugar;
		total.price += justDrank.price;

	}
}

describe("test addToWeek()", function(){
         var week1 = new Array('1', '2', '3', '4', '5', '6', '7');
         var week2 = new Array('1', '2', '3', '4', '5', '6', '7', '9', '10');
         var total = '8';
         
         it("add total to week", function(){
            
            expect(week1).toEqual('1', '2', '3', '4', '5', '6', '7', '8');
            expect(week2),toEqual('8');
            expect(week1).not.toEqual('8');
            expect(week2).not .toEqual('1', '2', '3', '4', '5', '6', '7', '9', '10', '8');
            });
         });