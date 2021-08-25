<?php
 $con = mysqli_connect('servicedesk-slv.ar.ray.group','UserRO','UserRO01','glpi');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>TechJunkGigs</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([
 
 ['TicketsDate','TicketsOpened'],
 <?php 
 $query = "SELECT CONCAT(YEAR(raynet_glpi_tickets.date_creation),lpad(MONTH(raynet_glpi_tickets.date_creation),2,'0')) AS TicketsDate, COUNT(raynet_glpi_tickets.id)  AS TicketsOpened FROM raynet_glpi_tickets 
 WHERE raynet_glpi_tickets.date_creation > (date_sub(CURDATE(), INTERVAL 12 MONTH))
 GROUP BY TicketsDate
 ORDER BY TicketsDate	 ";
 
 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){
 
 echo "['".$row['TicketsDate']."',".$row['TicketsOpened']."],";
 }
 ?> 
 
 ]);
 
 var options = {
 title: 'Last 12 month created tickets',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("12monthsticketschart"));
 chart.draw(data,options);
 }
 
    </script>
 
</head>
<body>
 <div class="container-fluid">
 <div id="12monthsticketschart" style="width: 100%; height: 200px;"></div>
 </div>
 
</body>
</html>