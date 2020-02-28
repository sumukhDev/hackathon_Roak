   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit']))
{

     $fname = $_POST['fname'];
    $lname = $_POST['lname'];
     $email = $_POST['email'];
     $phone_num = $_POST['phone_num'];
     $date = $_POST['date'];


 $sql = "INSERT INTO userdata (fname,lname,email,phone_num,date)
   VALUES ('$fname','$lname','$email','$phone_num','$date')";
   
    if (mysqli_query($conn, $sql))
    {
      
    }
    else
    {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Settings</title>
    <!--   Favicon -->
    <link rel="shortcut icon" href="./Images/Cow_icon.ico" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

      <!-- <link rel="stylesheet" type="text/css" href="F:\COLLEGE\Hackathon\adminstrap_theme\css\style.css">  -->
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
    <style type="text/css">
    .io {
        border: 1px solid black;
        border-radius: 15px;
        padding-left: 14px;
        padding-right: 14px;
        padding-top: 0px;
        background-color: #D6EAF8;
    }

    .gh {
        background-color: #F8F8F8;

    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #808080;
        background-color: #f4f1f1;
    }



    body {
        font-family: 'Muli', sans-serif;
    }


    @media only screen and (max-width: 756px) {

        td,
        th {
            display: block;


        }



        hr {
            -moz-border-bottom-colors: none;
            -moz-border-image: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: #EEEEEE -moz-use-text-color #FFFFFF;
            border-style: solid none;
            border-width: 1px 0;
            margin: 18px 0;
        }
    </style>

<body>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar gh elevation-4">
                <div style="  padding: 20% 30% 10% 30%; margin-left: 13px; ">
                    <img src="./images/sacred-cow.png">
                </div>
                
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i><img src="./images/home-white-24dp/1x/outline_home_black_24dp.png"></i>
                                    <p style="">
                                        Dashboard
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <!-- <ul class="nav nav-treeview">
                           <li class="nav-item">
                             <a href="#" class="nav-link active">
                               <i class="nav-icon"><img src="./file (1).png"></i>
                               <p>Pages
                                 <i class="right fas fa-angle-down  "></i></p>
                             </a>
                           </li> -->
                        </ul>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon"><img src="./images/file (1).png"></i>
                                    <p style>
                                        Pages
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Team</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Orders</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Settings</p>
                                        </a>
                                    </li>
                            </li>
                        </ul>
                        </ul>
                        </li>
                        <br>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            
                            <br><br><br>
                            
                        </ul>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container">
                       <section>
  <div id="transit" class="container">
    <p style="width: 100%;margin-left: 25px;font-size:10px;">Overview</p>
    <table>
       <tr>
        <td><h1 style="width: 100%;margin-left: 25px;font-size: 30px;">Dashboard</h1></td>
        <td><button class ="btn btn-primary" style="margin-left: 800px;font-size: 15px;">Create Report</button></td>
       </tr>
      </table>
      <hr style="margin-left: 25px;margin-right: 0px;">
    </div>
  </section>
  <!-- Dashboard Table -->
   <section>
  <div class="panel panel-default container">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Profile Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2 class="fas fa-briefcase" aria-hidden="true"></h2>
                    <h2>$20000</h2>
                    <h4>Budget</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2 class="fas fa-hourglass" aria-hidden="true"></h2>
                    <h2>120</h2>
                    <h4>Total Hours</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2 class="fa fa-signal" aria-hidden="true"></h2>
                    <h2>85%</h2>
                    <h4>Progress</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2 class="fa fa-cog  " aria-hidden="true"></h2>
                    <h2>$5</h2>
                    <h4>Cost/Unit</h4>
                  </div>
                </div>
              </div>
              </div>
            </section>
  <!-- Website Overview -->
  
    <div class="container-fluids">
        <?php include 'chart_final.php';?>
    </div>

                           
                                            </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
            </div>
        </div>
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        </script>
    </body>

</html>