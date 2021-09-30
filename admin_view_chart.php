<?php
include_once("connect.php");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Username', 'Total_price'],
         <?php
         $sql = "SELECT * FROM food_orders";
         $fire = mysqli_query($conn,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['Username']."',".$result['Total_price']."],";
          }

         ?>
        ]);


        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data);
      }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container
        {
            width: 100%;
            height: auto;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            position: absolute;
        }
        body
        {
            font-family: 'Varela Round';
        }
        h1
        {
            text-align:center;
            margin-top:3%;
        }
        #piechart
        {
            margin-left:18%;
        }
    </style>
  </head>
  <body>
    <h1>Customer spending habits</h1>
  <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>