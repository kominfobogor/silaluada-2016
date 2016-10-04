<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>HASIL UJI AIR SUNGAI CIPARIGI </title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("data/data_ciparigi_hulu.php", function(json) {
	    
		    chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'container',
	                type: 'line',
	                marginRight: 250,
	                marginBottom: 50
	            },
	            title: {
	                text: 'Hasil Pengujian Ciparigi Hulu',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: ['2010-I', '2010-II', '2011-I', '2011-II', '2012-I', '2012-II', '2013-I', '2013-II', '2014-I', '2014-II']
	            },
	            yAxis: {
	                title: {
	                    text: 'Hasil Pengujian'
	                },
	                plotLines: [{
	                    value: 0,
	                    width: 1,
	                    color: '#808080'
	                }]
	            },
	            tooltip: {
	                formatter: function() {
	                        return '<b>'+ this.series.name +'</b><br/>'+
	                        this.x +'<br/>'+ this.y;
	                }
	            },
	            legend: {
	                layout: 'vertical',
	                align: 'right',
	                verticalAlign: 'top',
	                x: -10,
	                y: 40,
	                borderWidth: 0
	            },
	            series: json
	        });
	    });
    
    });
    
});

$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("data/data_ciparigi_tengah.php", function(json) {
	    
		    chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'container1',
	                type: 'line',
	                marginRight: 250,
	                marginBottom: 50
	            },
	            title: {
	                text: 'Hasil Pengujian Ciparigi Tengah',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: ['2010-I', '2010-II', '2011-I', '2011-II', '2012-I', '2012-II', '2013-I', '2013-II', '2014-I', '2014-II']
	            },
	            yAxis: {
	                title: {
	                    text: 'Hasil Pengujian'
	                },
	                plotLines: [{
	                    value: 0,
	                    width: 1,
	                    color: '#808080'
	                }]
	            },
	            tooltip: {
	                formatter: function() {
	                        return '<b>'+ this.series.name +'</b><br/>'+
	                        this.x +'<br/>'+ this.y;
	                }
	            },
	            legend: {
	                layout: 'vertical',
	                align: 'right',
	                verticalAlign: 'top',
	                x: -10,
	                y: 40,
	                borderWidth: 0
	            },
	            series: json
	        });
	    });
    
    });
    
});
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("data/data_ciparigi_hilir.php", function(json) {
	    
		    chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'container2',
	                type: 'line',
	                marginRight: 250,
	                marginBottom: 50
	            },
	            title: {
	                text: 'Hasil Pengujian Ciparigi Hilir',
	                x: -20 //center
	            },
	            subtitle: {
	                text: '',
	                x: -20
	            },
	            xAxis: {
	                categories: ['2010-I', '2010-II', '2011-I', '2011-II', '2012-I', '2012-II', '2013-I', '2013-II', '2014-I', '2014-II']
	            },
	            yAxis: {
	                title: {
	                    text: 'Hasil Pengujian'
	                },
	                plotLines: [{
	                    value: 0,
	                    width: 1,
	                    color: '#808080'
	                }]
	            },
	            tooltip: {
	                formatter: function() {
	                        return '<b>'+ this.series.name +'</b><br/>'+
	                        this.x +'<br/>'+ this.y;
	                }
	            },
	            legend: {
	                layout: 'vertical',
	                align: 'right',
	                verticalAlign: 'top',
	                x: -20,
	                y: 40,
	                borderWidth: 0
	            },
	            series: json
	        });
	    });
    
    });
    
});
		</script>
	</head>
	<body>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>


	<div id="container" style="min-width: 100px; height: 200px; margin: 0 auto"></div>
	<div id="container1" style="min-width: 100px; height: 200px; margin: 0 auto"></div>
	<div id="container2" style="min-width: 100px; height: 200px; margin: 0 auto"></div>
	</body>
</html>
