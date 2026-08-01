<?php

$host = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$port = 4000;
$user = "ax6KHc1BNkyuaor.root";
$password = "EP8isIWoEOQk7DSr";
$dbname = "studentdb";



$conn=mysqli_connect($host,$user,$password,$dbname);

if(!$conn)
{
die("Connection Failed");
}
?>
