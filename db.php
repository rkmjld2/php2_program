<?php

$host="localhost";
$user="root";
$password="";
$dbname="studentdb";

$conn=mysqli_connect($host,$user,$password,$dbname);

if(!$conn)
{
die("Connection Failed");
}
?>