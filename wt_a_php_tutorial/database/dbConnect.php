<?php
$serverName="localhost";
$userName="root";
$pass="";
$dbName="wt_A";


$conn=mysqli_connect($serverName, $userName, $pass, $dbName);

if(!$conn)
    {
        echo "connection failed", " ", mysqli_connect_error();
    }
 else
    {
        echo "connection Successful";
    }

?>