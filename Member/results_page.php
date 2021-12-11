<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>PatientID</th>
<th>First Name</th>
<th>Last Name</th>
<th>date</th>
<th>gender</th>
<th>age</th>
<th>items</th>
<th>details</th>
<th>email</th>
</tr>
<?php
require_once("db_conn.php");
$sql = "SELECT Patient_iD,fname,lname,'date',gender,age,items,details FROM pharmacy";
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["Patient_ID"]. "</td>
<td>" . $row["fname"] . "</td>
<td>" . $row["lname"]. "</td>
<td>" . $row["date"]. "</td>
<td>" . $row["gender"] . "</td>
<td>" . $row["age"]. "</td>
<td>" . $row["items"]. "</td>
<td>" . $row["details"] . "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>

($patientID, $fname, $lname, $date, $gender, $age, $items, $details, $email)