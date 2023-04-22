<?php
include("db_connect.php");

$id = $_GET['id'];

$query= "DELETE FROM booking WHERE id = '$id'";
$data= mysqli_query($con,$query);

if($data)
{
    echo " <script>alert('record deleted')</script>";
    
       echo" <meta http-equiv = 'refresh' content = '0; url = http://localhost/dbms/display.php' />";
    
}
else
{
    echo "failed to delete";
}
?>