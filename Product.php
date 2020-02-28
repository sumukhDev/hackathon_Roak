    <?php
 
$conn= mysqli_connect("localhost","root","","finalproject");
if(mysqli_error($conn)) {
    echo "failed";
}
else{
    echo "";
} 

if (isset($_POST['submit']))
{
         
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
     $brand_name = $_POST['brand_name'];
     $product_price= $_POST['product_price'];
     $provider_name=$_POST['provider_name'];
     $product_volume=$_POST['product_volume'];
     $product_image = $_POST['product_image'];
    $sql = "INSERT INTO products (product_id,product_name,brand_name,product_price,provider_name,product_volume,product_image)
   VALUES ('$product_id','$product_name','$brand_name','$product_price','$provider_name','$product_volume','$product_image')";

    if (mysqli_query($conn, $sql))
    {
        echo "sucess";
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
    <title>Product</title>
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
                
              

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto" >
                              <form class="form-inline active-cyan-4">
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
    aria-label="Search">
  <i class="fas fa-search" aria-hidden="true"></i>
</form>
                            <li class="nav-item active">
                                <a class="nav-link" href="Product.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">LogOut</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar gh elevation-4" style="height:100%;">
                <div style="  padding: 20% 30% 10% 30%; margin-left: 13px; ">
                    <img src="./images/sacred-cow.png">
                </div>
                <div>
                    <i class="   glyphicon glyphicon-home"></i>
                </div>
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i><img src="./images/home-white-24dp/1x/outline_home_black_24dp.png"></i>
                                    <p style="">
                                        Dashboard
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                 <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>1</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Orders.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>2</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Product.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>3</p>
                                        </a>
                                    </li>
                            </li>
                        </ul>
                        </ul>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                                        <a href="team.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Team</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Orders.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Orders</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Product.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Product</p>
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
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="heading">Product Details</h1>
                            </div>
                        </div>
                    </div><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 div">
                            	<hr>
                                <form action="" class="form-group" method="post" target="#">
                                            <div class="col-md-6 ">
                                                <label for="fname">Product Id</label>
                                                <input type="number"  name="product_id" placeholder="Enter Product Id" class="form-control">
                                            </div>
                                            <br>
                                            <div class="col-md-6">
                                                <label for="lname">Product Name</label>
                                                <input type="text"  name="product_name" placeholder="Enter Product Name " class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label for="email">Brand Name</label>
                                                <input type="text"  name="brand_name" placeholder="Enter Brand Name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label for="phone">Price</label>
                                                <input type="number"  name="product_price" placeholder="Enter Product Price" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label for="phone">Provider</label>
                                                <input type="text"  name="provider_name" placeholder="Provider Name" class="form-control">
                                            </div>
                                            <br>
                                            <div class="col-md-6">
                                                
                                                <label for="phone">Product Volume</label>
                                                <input type="text"  name="product_volume" placeholder="Product Volume" class="form-control">
                                            </div>
                                             <br>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlFile1">Please Upload Product Image</label>
                                    <input type="file" class="form-control-file" id="image" name="product_image">
                                                </div>
                                            <br>
                                            <div class="col-md-12 buttondiv">
                                                <input type="submit" value="submit" name="submit" id="submit" class="btn btn-primary res">
                                                <button type="reset" class="btn btn-primary res">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                
                                    <br>
                                </div>
                            </div>
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
  
    </body>

</html>