<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Line</title>
</head>
<body>
  <div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('number', 'id');
        data.addColumn('number', 'temperatura');
        data.addColumn('number', 'humedad');
        data.addColumn('number', 'indice');

        var options = {
          title: 'Lineas de THG',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        $.ajax({
                url:"/datosGraficas",
                type:"GET",
                dataType:"json",
                success:function(datos){ 

                 data.addRows(jsonArray(datos));
                 chart.draw(data,options);
                 
                }
              });
}

$(document).ready(function(){
  setInterval(drawChart, 15000);
});
</script>
</html>