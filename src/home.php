<div class="banner">
					<h2>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
						
					</h2>
				</div>
				<div class=""><img src="images/Doctor.jpg"></div>
				<div class="blank">
					<div class="blank-page">

<script>
window.onload = function () {

var dataPoints1 = [];
var dataPoints2 = [];
var dataPoints3 = [];
var chart = new CanvasJS.Chart("chartContainer", {
	zoomEnabled: true,
	title: {
		text: "Temperature ,Blood Preasure and SPo2 Analyzing Chart"
	},
	axisX: {
		title: "chart updates every Patient Visit"
	},
	axisY:{
		prefix: "",
		includeZero: false
	}, 
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		verticalAlign: "top",
		fontSize: 22,
		fontColor: "dimGrey",
		itemclick : toggleDataSeries
	},
	data: [{ 
		type: "line",
		xValueType: "dateTime",
		yValueFormatString: "####.0 H",
		xValueFormatString: "hh:mm:ss TT",
		showInLegend: true,
		name: "Blood_Preasure",
		dataPoints: dataPoints1
		},
		{				
			type: "line",
			xValueType: "dateTime",
			yValueFormatString: "####.00 C",
			showInLegend: true,
			name: "Temperature" ,
			dataPoints: dataPoints2
	},
	{				
			type: "line",
			xValueType: "dateTime",
			yValueFormatString: "####.00 ppm",
			showInLegend: true,
			name: "SPO2" ,
			dataPoints: dataPoints3
	}]
});

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

var updateInterval = 10000;
// initial value

var yValue1 = 29; 
var yValue2 = 30;
var yValue3 = 23;

var time = new Date;
// starting at 9.30 am
time.setHours(9);
time.setMinutes(30);
time.setSeconds(00);
time.setMilliseconds(00);

function updateChart(count) {
	count = count || 1;
	var deltaY1, deltaY2, deltaY3;
	for (var i = 0; i < count; i++) {
		time.setTime(time.getTime()+ updateInterval);
		deltaY1 = .5 + Math.random() *(-.5-.6);
		deltaY2 = .5 + Math.random() *(-.5-.4);
deltaY3 = .5 + Math.random() *(-.5-.2);
	// adding random value and rounding it to two digits. 
	yValue1 = Math.round((yValue1 + deltaY1)*100)/100;
	yValue2 = Math.round((yValue2 + deltaY2)*100)/100;
    yValue3 = Math.round((yValue3 + deltaY3)*100)/100;

	// pushing the new values
	dataPoints1.push({
		x: time.getTime(),
		y: yValue1
	});
	dataPoints2.push({
		x: time.getTime(),
		y: yValue2
	});
	dataPoints3.push({
		x: time.getTime(),
		y: yValue3
	});
	}

	// updating legend text with  updated with y Value 
	chart.options.data[0].legendText = " Blood_Preasure BP" + 126.45;
	chart.options.data[1].legendText = " Temperature C" + yValue2; 
	chart.options.data[2].legendText = " SPO2 ppm" + 94; 
	chart.render();
}
// generates first set of dataPoints 
updateChart(100);	
setInterval(function(){updateChart()}, updateInterval);

}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

					</div>
			   </div>