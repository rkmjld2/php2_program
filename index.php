<?php
include "db.php";
?>

<!DOCTYPE html>

<html>

<head>
<title>Student Database</title>
</head>

<body>

<h2>Add Student</h2>

<form action="add.php" method="post">

Name

<input type="text" name="name">

<br><br>

Course

<input type="text" name="course">

<br><br>

<input type="submit" value="Save">

</form>

<hr>

<h2>Student List</h2>

<table border="1">

<tr>

<th>ID</th>

<th>Name</th>

<th>Course</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM students");

while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";

echo "<td>".$row['id']."</td>";

echo "<td>".$row['name']."</td>";

echo "<td>".$row['course']."</td>";

echo "</tr>";
}

?>

</table>

</body>

</html>