/**
 * 
 */
 
// Get the context of the canvas we want to select
var ctx = document.getElementById("myChart").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data);

new Chart(ctx).PolarArea(data, options);
new Chart(ctx).Line(data, options);

var data = {
		labels: ["January", "February", "March", "April", "May", "June", "July"],
		datasets: [
		        {
		        	fillColor : "rgba(220,220,220,0.5)",
		        	strokeColor : "rgba(220,220,220,1)",
		        	pointColor : "rgba(220,220,220,1)",
		        	pointStrokeColor : "#fff",
		        	data : [65,59,90,81,56,55,40]
		        },
		        {
		        	fillColor : "rgba(151,187,205,0.5)",
		        	strokeColor : "rgba(151,187,205,1)",
		        	pointColor : "rgba(151,187,205,1)",
		        	pointStrokeColor : "#fff",
		        	data : [28,48,40,19,96,27,100]
		        }
		]
};

Line.defaults = {
		// Boolean - If we show the scale above the chart data
		scaleOverlay: false,
		
		// Boolean - If we want to override with a hard coded scale
		scaleOverride: false,
		
		/* Required if scaleOverride is false */
		// Number - the number of steps in a hard coded scale
		scaleSteps: null,
		// Number - the value jump in the hard coded scale
		scaleStepWidth: null,
		// Number - the scale starting value
		scaleStartValue: null,
		
		// String - color of the scale line
		scaleLineColor: "rgba(0, 0, 0, 1)",
		
		// Number - pixel width of the scale line
		scaleLineWidth: 1,
		
		// Boolean - whether to show labels on the scale
		scaleShowLabels: true,
		
		// Interpolated JS string - can access value
		scaleLabe: "<%=value%>",
		
		// String - scale label font decoration for the scale label
		scaleFontFamily: "Arial",
		
		// Number - scale label font size in pixels
		scaleFontSize: 12,
		
		// String - scale label font weight style
		scaleFontStyle: "normal",
		
		// String - scale label font color
		scaleFontColor: "#666",
		
		// Boolean - whether grid lines are shown across the chart
		scaleShowGridLines: true,
		
		// String - color of grid lines
		scaleGridLineColor: "rgba(0, 0, 0, .05)",
		
		// Number - width of grid lines
		scaleGridLineWidth: 1,
		
		// Boolean - whether the line is curved between points
		bezierCurve: true,
		
		// Boolean - whether to show a dot for a point
		pointDot: true,
		
		// Number - Radius of each point dot in pixels
		pointDotRadius: 3,
		
		// Number - pixel width of point dot stroke
		pointDotStokeWidth: 1,
		
		// Boolean - whether to show a stroke for datasets
		datasetStroke: true,
		
		// Number - pixel width of dataset stroke
		datasetStrokeWidth: 2,
		
		// Boolean - whether to fill the dataset with a color
		datasetFill: true,
		
		// Boolean - wheterh to animate the chart
		animation: true,
		
		// Number - number of animation steps
		animationSteps: 60,
		
		// String - animation easing effect
		animationEasing: "easeOutQuart",
		
		// Function - fires when the animation is complete
		onAnimationComplete: null
};