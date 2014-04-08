/*
* The method takes a line graph data and add a lengend to it
* with the same colour of stroke.
*
*@parent the paramater that holds the legend data
*@data the paramater that holds the line graph data
*
*/



function legend(parent, data) {
    parent.className = 'legend';
    var datas = data.hasOwnProperty('datasets') ? data.datasets : data;

    datas.forEach(function(d) {
        var title = document.createElement('span');
        title.className = 'title';
        title.style.borderColor = d.hasOwnProperty('strokeColor') ? d.strokeColor : d.color;
        title.style.borderStyle = 'solid';
        parent.appendChild(title);

        var text = document.createTextNode(d.title);
        title.appendChild(text);
    });
}
