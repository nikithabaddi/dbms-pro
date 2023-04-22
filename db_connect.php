<?php
error_reporting(0);
    $server="localhost";
    $username="root";
    $password="";
    $database="service";

    $con=mysqli_connect($server,$username,$password,$database);

    if($con){
        echo "success";
    }
    else{
        die("error".mysqli_connect_error());
    }
?>