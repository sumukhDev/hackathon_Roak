<?php
  $conn = mysqli_connect("localhost","root","","admin");
  if ($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
  }



  $rs=mysqli_query($conn,"SELECT * FROM chart_data");

    if ($rs->num_rows<1) {
      echo "no data...";
    }
    $arr="";


        while ($row=mysqli_fetch_array($rs)) 
      {
        $arr= $arr."{y:".$row["Share"].",label:'".$row["Members"]."'},";
        
      }

?>





<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer1", {
  //theme: "light1", // "light1", "light2", "dark1", "dark2"
  backgroundColor:"#DFDFDF",
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Orders"
  },
  data: [{
    type: "spline",
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}k",
    //showInLegend: "true",
    //legendText: "{label}",
    indexLabelFontSize: 30,
    indexLabel: "{y}%",
    dataPoints: [
<?php echo "$arr" ?>
    ]
  }]
});
chart.render();
// Chart -2
var chart = new CanvasJS.Chart("chartContainer2", {
  theme: "light1", // "light1", "", "dark1", "dark2"
  backgroundColor:"#DFDFDF",
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Orders"
  },
  data: [{
    type: "bubble",
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}k",
    //showInLegend: "true",
    //legendText: "{label}",
    indexLabelFontSize: 20,
    indexLabel: "{label} - {y}%",
    dataPoints: [
<?php echo "$arr" ?>
    ]
  }]
});
chart.render();

}
</script>
</head>
<body>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 
  <div id="chartContainer1" style="height:100%; width:55%;display: inline-block;"></div>
  <div id="chartContainer2" style="height:100%; width:40%;display: inline-block;margin-left: 25px;"></div>
  <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
</body>
</html>