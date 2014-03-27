/**
* This method takes all of the information from the drinks array
* and uses it to draw the line graph
*
* @method drawGraph
*
*/
function drawGraph()
{
	
	//initialize sugar and alcohol values for each day to zero
	var daysSugar = new Array(0,0,0,0,0,0,0);
	var daysAlcohol = new Array(0,0,0,0,0,0,0);


		
	/**Go through the entire array of drinks	
	* Find out which day it belongs to and 
	* add it to the total of that day
	*/
	
	var count = 0;
	for(var e in userDrinksArray)
		if(userDrinksArray.hasOwnProperty(e))
			count++;		
	if(count<=0)
	{
		var daysSugar = new Array(3,3,3,3,3,3,3);
		var daysAlcohol = new Array(4,4,4,4,4,4,4);
	}
	else{
	for(var i=0;i<count;i++)
	{
		var dayOfDrink = new Date(userDrinksArray[i].dateAdded);
		switch(dayOfDrink.getDay())
		{
			case 0:
				
				daysSugar[0] += parseInt(userDrinksArray[i].sugar);
				daysAlcohol[0] += parseInt(userDrinksArray[i].alcohol);
				break;
				
			case 1:
				
				daysSugar[1] += parseInt(userDrinksArray[i].sugar);
				daysAlcohol[1] += parseInt(userDrinksArray[i].alcohol);
				break;
				
			case 2:
				
				daysSugar[2] += parseInt(userDrinksArray[i].sugar);
				daysAlcohol[2] += parseInt(userDrinksArray[i].alcohol);
				break;
				
			case 3:
				
				daysSugar[3] += parseInt(userDrinksArray[i].sugar);
				daysAlcohol[3] += parseInt(userDrinksArray[i].alcohol);
				break;
			
			case 4:
				
				daysSugar[4] += parseInt(userDrinksArray[i].sugar);
				daysAlcohol[4] += parseInt(userDrinksArray[i].alcohol);
				break;
				
			case 5:
				
				daysSugar[5] += parseInt(userDrinksArray[i].sugar);
				daysAlcohol[5] += parseInt(userDrinksArray[i].alcohol);
				break;
				
			case 6:
				
				daysSugar[6] += parseInt(userDrinksArray[i].sugar);
				daysAlcohol[6] += parseInt(userDrinksArray[i].alcohol);
				break;
			default:
		}
	}

	//Using the Chart.js library, creates the line chart
	//Values graphed are the daily sugar and alcohol values
	var lineChartData = {
		labels : ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
		datasets : [
		{
			fillColor : "rgba(192,40,10,0.5)",
			strokeColor : "rgba(220,220,220,1)",
			pointColor : "rgba(220,220,220,1)",
			pointStrokeColor : "#fff",
			data : [daysSugar[0],daysSugar[1],daysSugar[2],daysSugar[3],daysSugar[4],daysSugar[5],daysSugar[6]]
		},
		{
			fillColor : "rgba(8,163,0,0.5)",
			strokeColor : "rgba(151,187,205,1)",
			pointColor : "rgba(151,187,205,1)",
			pointStrokeColor : "#fff",
			data : [daysAlcohol[0],daysAlcohol[1],daysAlcohol[2],daysAlcohol[3],daysAlcohol[4],daysAlcohol[5],daysAlcohol[6]]
		}
		]
				
	}

	//Draw the chart itself
	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
}
}