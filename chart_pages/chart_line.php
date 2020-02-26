<?php

  $dbhost='localhost';
  $username='root';
  $password='';

  $conn = mysqli_connect("$dbhost","$username","$password",'test');
  if ($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
  }

  $rs=mysqli_query($conn,"SELECT * FROM  top_odi_wicket_takers");

    if ($rs->num_rows<1) {
      echo "no data...";
    }
    $arr="";
        while ($row=mysqli_fetch_array($rs)) 
      {
        $arr= $arr."{y:".$row["wickets"].",label:'".$row["player"]."'},";
        
      }

    

?>





<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

  var chart1 = new CanvasJS.Chart("chartContainer1", {
  //theme: "light1", // "light1", "light2", "dark1", "dark2"
  backgroundColor:"#DFDFDF",
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Orders"
  },
  data: [{
    type: "line",
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}k",
    //showInLegend: "true",
    //legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "${y}k",
    dataPoints: [
<?php echo "$arr" ?>
    ]
  }]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
  //theme: "light1", // "light1", "light2", "dark1", "dark2"
  backgroundColor:"#DFDFDF",
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Orders"
  },
  data: [{
    type: "column",
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}k",
    //showInLegend: "true",
    //legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "${y}k",
    dataPoints: [
<?php echo "$arr" ?>
    ]
  }]
});
// Chart -2
var chart3 = new CanvasJS.Chart("chartContainer3", {
  //theme: "light1", // "light1", "light2", "dark1", "dark2"
  backgroundColor:"#DFDFDF",
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Orders"
  },
  data: [{
    type: "doughnut",
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}k",
    //showInLegend: "true",
    //legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "{label} - ${y}k",
    dataPoints: [
<?php echo "$arr" ?>
    ]
  }]
});
chart1.render();
chart2.render();
chart3.render();

}
</script>
</head>
<body>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <div id="chartContainer1" style="height:400px; width:100%;display: inline-block;"></div><br>
  <div id="chartContainer2" style="height:300px; width:55%;display: inline-block;"></div>
  <div id="chartContainer3" style="height:300px; width:40%;display: inline-block;margin-left: 50px;"></div>
  <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
</body>
</html>