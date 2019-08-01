<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tryout";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word,meaning FROM tryout where word like 'x%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
         // output data of each row
	 echo "<font size=6pt><table border='1'>
<tr>
<th>word</th>
<th>meaning</th>
</tr>";
     while($row = $result->fetch_assoc()) {
		 
         echo "<tr>";
echo "<td>" . $row['word'] . "</td>";
echo "<td>" . $row['meaning'] . "</td>";
echo "</tr>";


     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>