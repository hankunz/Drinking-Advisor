if(!!(window.addEventListener)) window.addEventListener('DOMContentLoaded', main);
else window.attachEvent('onload', main);

function main() {
    lineChart();
    pieChart();
}

function lineChart() {
    var data = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
            fillColor : "rgba(220,220,220,0.5)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            data : [65,59,90,81,56,55,40],
            title : 'Tigers'
        },
        {
            fillColor : "rgba(151,187,205,0.5)",
            strokeColor : "rgba(151,187,205,1)",
            pointColor : "rgba(151,187,205,1)",
            pointStrokeColor : "#fff",
            data : [28,48,40,19,96,27,100],
            title : 'Bears'
        }
        ]
    };

    var ctx = document.getElementById("lineChart").getContext("2d");
    new Chart(ctx).Line(data);

    legend(document.getElementById("lineLegend"), data);
}

function pieChart() {
    var data = [
        {
            value: 30,
            color:"#F38630",
            title: 'Bears'
        },
        {
            value : 50,
            color : "#E0E4CC",
            title: 'Lynxes'
        },
        {
            value : 100,
            color : "#69D2E7",
            title: 'Reindeer'
        }
    ];

    var ctx = document.getElementById("pieChart").getContext("2d");
    new Chart(ctx).Pie(data);

    legend(document.getElementById("pieLegend"), data);
}
