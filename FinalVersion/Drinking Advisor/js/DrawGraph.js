if(!!(window.addEventListener)) window.addEventListener('DOMContentLoaded', drawGraph);
else window.attachEvent('onload', drawGraph);

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
			data : [daysSugar[0],daysSugar[1],daysSugar[2],daysSugar[3],daysSugar[4],daysSugar[5],daysSugar[6]],
			title : 'Sugar'
		},
		{
			fillColor : "rgba(8,163,0,0.5)",
			strokeColor : "rgba(151,187,205,1)",
			pointColor : "rgba(151,187,205,1)",
			pointStrokeColor : "#fff",
			data : [daysAlcohol[0],daysAlcohol[1],daysAlcohol[2],daysAlcohol[3],daysAlcohol[4],daysAlcohol[5],daysAlcohol[6]],
		
			title : 'Alcohol'
		},
		{
			fillColor : "rgba(100,3,200,0.5)",
			strokeColor : "rgba(151,187,205,1)",
			pointColor : "rgba(151,187,205,1)",
			pointStrokeColor : "#fff",
			data : [daysVitaminC[0],daysVitaminC[1],daysVitaminC[2],daysVitaminC[3],daysVitaminC[4],daysVitaminC[5],daysVitaminC[6]],
		
			title : 'Vatamin C'
		}
		]
				
	}

	//Draw the chart itself
	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData,options);
	legend(document.getElementById("lineLegend"), lineChartData);
	
	}
	else
	{
	
		var today = new Date().getDay();
		
		var daysSugar = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0);
		var daysAlcohol = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0);
		var daysVitaminC = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0);
		
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
					
					daysSugar[7] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[7] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[7] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 1:
					
					daysSugar[1] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[1] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[1] += parseInt(userDrinksArray[i].vitaminc);
					
					daysSugar[8] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[8] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[8] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 2:
					
					daysSugar[2] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[2] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[2] += parseInt(userDrinksArray[i].vitaminc);
					
					
					daysSugar[9] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[9] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[9] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 3:
					
					daysSugar[3] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[3] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[3] += parseInt(userDrinksArray[i].vitaminc);
					
					daysSugar[10] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[10] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[10] += parseInt(userDrinksArray[i].vitaminc);
					break;
				
				case 4:
					
					daysSugar[4] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[4] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[4] += parseInt(userDrinksArray[i].vitaminc);
					
					daysSugar[11] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[11] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[11] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 5:
					
					daysSugar[5] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[5] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[5] += parseInt(userDrinksArray[i].vitaminc);
					
					daysSugar[12] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[12] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[12] += parseInt(userDrinksArray[i].vitaminc);
					break;
					
				case 6:
					
					daysSugar[6] += parseInt(userDrinksArray[i].sugar);
					daysAlcohol[6] += parseInt(userDrinksArray[i].alcohol);
					daysVitaminC[6] += parseInt(userDrinksArray[i].vitaminc);
					break;
				default:
			}
		}
		
		var labelNames = new Array("Mon","Tue","Wed","Thu","Fri","Sat","Sun","Mon", "Tue","Wed","Thu","Fri","Sat");

		//Using the Chart.js library, creates the line chart
		//Values graphed are the daily sugar and alcohol values
		var lineChartData = {
			labels : [labelNames[today],labelNames[today+1],labelNames[today+2],labelNames[today+3],labelNames[today+4],labelNames[today+5],labelNames[today]+6],
			datasets : [
			{
				fillColor : "rgba(192,40,10,0)",
				strokeColor : "#11A8AB",
				pointColor : "#11A8AB",
				pointStrokeColor : "#fff",
				data : [daysSugar[today],daysSugar[today+1],daysSugar[today+2],daysSugar[today+3],daysSugar[today+4],daysSugar[today+5],daysSugar[today+6]],
					title : 'Sugar'
		
			},
			{
				fillColor : "rgba(8,163,0,0)",
				strokeColor : "#E64C65",
				pointColor : "#E64C65",
				pointStrokeColor : "#fff",
				data : [daysAlcohol[today],daysAlcohol[today+1],daysAlcohol[today+2],daysAlcohol[today+3],daysAlcohol[today+4],daysAlcohol[today+5],daysAlcohol[today+6]],
				
				title : 'Alcohol'
			
			},
			{
				fillColor : "rgba(100,3,200,0)",
				strokeColor : "#FCB150",
				pointColor : "#FCB150",
				pointStrokeColor : "#fff",
				data : [daysVitaminC[today],daysVitaminC[today+1],daysVitaminC[today+2],daysVitaminC[today+3],daysVitaminC[today+4],daysVitaminC[today+5],daysVitaminC[today+6]],
		
				title : 'Vatamin C'
		}
			]
					
		}

		//Draw the chart itself
		var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
		legend(document.getElementById("lineLegend"), lineChartData);
}
}
