/**
* This method takes all of the information from the drinks array
* and uses it to draw the line graph
*
* @method drawGraph
*
*/
function drawGraph()
{

	
	if (drinkStatus	== 0) {
		//Using the Chart.js library, creates the line chart
		//Values graphed are the daily sugar and alcohol values
		
		//initialize sugar and alcohol values for each day to zero
		var daysSugar = new Array(3,3,3,3,3,3,3);
		var daysAlcohol = new Array(1,1,1,1,1,1,1);
		var daysVitaminC = new Array(1,1,1,1,1,1,1);
		
		var options = {
		
		scaleOverlay : true,
		scaleSteps : 5,
		scaleStepWidth : 5,
		scaleStartValue : 0
		}
		
		
		var lineChartData = {
		labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],
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
		},
		{
			fillColor : "rgba(100,3,200,0.5)",
			strokeColor : "rgba(151,187,205,1)",
			pointColor : "rgba(151,187,205,1)",
			pointStrokeColor : "#fff",
			data : [daysVitaminC[0],daysVitaminC[1],daysVitaminC[2],daysVitaminC[3],daysVitaminC[4],daysVitaminC[5],daysVitaminC[6]]
		}
		]
				
	}

	//Draw the chart itself
	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData,options);
		document.write("No drinks added, this is just an example chart!");
	
	}
	else
	{
		
		var daysSugar = new Array(0,0,0,0,0,0,0);
		var daysAlcohol = new Array(0,0,0,0,0,0,0);
		var daysVitaminC = new Array(0,0,0,0,0,0,0);
		
		var count = userDrinksArray.length;
		/**Go through the entire array of drinks	
		* Find out which day it belongs to and 
		* add it to the total of that day
		*/
		
			

		for(var i=0;i<count;i++)
		{
			var dayOfDrink = new Date(userDrinksArray[i].dateAdded);
			switch(dayOfDrink.getDay())
			{
				case 0:
					
					daysSugar[0] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[0] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[0] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 1:
					
					daysSugar[1] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[1] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[1] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 2:
					
					daysSugar[2] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[2] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[2] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 3:
					
					daysSugar[3] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[3] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[3] += parseInt(userDrinksArray[i].vitaminc);
					break;
				
				case 4:
					
					daysSugar[4] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[4] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[4] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 5:
					
					daysSugar[5] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[5] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[5] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 6:
					
					daysSugar[6] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[6] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[6] += parseInt(userDrinksArray[i].vitaminc);
					break;
				default:
			}
		}

		//Using the Chart.js library, creates the line chart
		//Values graphed are the daily sugar and alcohol values
		var lineChartData = {
			labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],
			datasets : [
			{
				fillColor : "rgba(192,40,10,0.5)",
				strokeColor : "red",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				data : [daysSugar[0],daysSugar[1],daysSugar[2],daysSugar[3],daysSugar[4],daysSugar[5],daysSugar[6]]
			},
			{
				fillColor : "rgba(8,163,0,0.5)",
				strokeColor : "green",
				pointColor : "rgba(151,187,205,1)",
				pointStrokeColor : "#fff",
				data : [daysAlcohol[0],daysAlcohol[1],daysAlcohol[2],daysAlcohol[3],daysAlcohol[4],daysAlcohol[5],daysAlcohol[6]]
			},
			{
				fillColor : "rgba(100,3,200,0.5)",
				strokeColor : "orange",
				pointColor : "rgba(151,187,205,1)",
				pointStrokeColor : "#fff",
				data : [daysVitaminC[0],daysVitaminC[1],daysVitaminC[2],daysVitaminC[3],daysVitaminC[4],daysVitaminC[5],daysVitaminC[6]]
		}
			]
					
		}

	var options = 
		{
		
			datasetFill : false
		}
		//Draw the chart itself
		var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData,options);
}
}
