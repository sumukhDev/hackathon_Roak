<?php

include_once "dbcon.php";

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$em=$_POST['email'];
$ph=$_POST['phone'];
$bd=$_POST['bday'];

$sql="insert into general(fname,lname,email,phone,bday) values ('$fn','$ln','$em','$ph','$bd');";

mysqli_query($con,$sql);