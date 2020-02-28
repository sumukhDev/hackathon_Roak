<?php
$dbserver="localhost";
$username="root";
$password="";
$dbname="settings";

$con=mysqli_connect($dbserver,$username,$password,$dbname);
if(mysqli_connect_error())
    echo "Failed";
else
    echo "Success";