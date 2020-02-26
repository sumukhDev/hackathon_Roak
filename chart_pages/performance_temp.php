<!DOCTYPE html>
<html>
<head>
	<title>Performance</title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="dashboard.css">
      <!-- <link rel="stylesheet" type="text/css" href="F:\COLLEGE\Hackathon\adminstrap_theme\css\style.css">  -->
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
    <!--<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="invoice.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	  <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header><a href="dashboard.html"><img src="cow.png"></a>Milk-O-Man</header>
  <ul>
    <li><a href="dashboard.html"><i class="fas fa-home"></i>Dashboard</a></li>
    <li><a href="#"><i class="fas fa-file"></i>Pages</a></li>
    <li><a href="team.html"><i class="fas fa-users"></i>Team</a></li>
    <li><a href="#"><i class="fas fa-shopping-cart"></i>Orders</a></li>
    <li><a href="#"><i class="fas fa-cog"></i>Setting</a></li>
    <li><a href="invoice.html"><i class="fas fa-receipt"></i>Invoice</a></li>
  </ul>
</div>
<section>
  <div id="transit" class="container">
    <table>
      <tr>
        <td><p style="width: 100%;margin-left: 25px;font-size:10px;">Overview</p></td>
        <td><p style="width: 100%;margin-left: 700px;font-size:10px;">Earnings</p></td>
        <td><p style="width: 100%;margin-left: 30px;font-size:10px;">Sessions</p></td>
        <td><p style="width: 100%;margin-left: 30px;font-size:10px;">Bounce</p></td>
      </tr>
       <tr>
        <td><h1 style="width: 100%;margin-left: 25px;font-size: 30px;">Performance</h1></td>
        <td><h3 style="width: 100%;margin-left: 700px;">$20k</h3></td>
        <td><h3 style="width: 100%;margin-left: 30px;">75k</h3></td>
        <td><h3 style="width: 100%;margin-left: 30px;">50%</h3></td>
        <!-- <td><button class ="btn btn-primary" style="margin-left: 800px;font-size: 15px;">Create Report</button></td> -->
       </tr>
      </table>
      <hr style="margin-left: 25px;margin-right: 0px;">
    </div>
  </section>
  <!-- Graphs -->
  <section>
    <div class="container">
      <?php include 'chart_line.php';?>
    </div>
  </section>
 <!-- <section>
  	<div class="container">
  		<?php include 'chart_final.php';?>
  	</div>
  </section>-->
</body>
</html>