<?php

include "db.php";

$name=$_POST['name'];

$course=$_POST['course'];

$sql="INSERT INTO students(name,course)
VALUES('$name','$course')";

mysqli_query($conn,$sql);

 //header("Location:index.php");

?>
