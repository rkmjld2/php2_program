<?php

$host="gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$user="ax6KHc1BNkyuaor.root";
$password="ax6KHc1BNkyuaor.root";
$dbname="studentdb";

$conn=mysqli_connect($host,$user,$password,$dbname);

if(!$conn)
{
die("Connection Failed");
}
?>
