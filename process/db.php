<?php
$dbServer="localhost";
$username="root";
$password="";
$dbName="tugasbe1_tubes_paw_1";
$con = mysqli_connect($dbServer,$username,$password,$dbName);
if(mysqli_connect_error())
{
    echo "Failed to connect to MySQL:". mysqli_connect_error();
}
?>