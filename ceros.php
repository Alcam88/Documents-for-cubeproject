<?php
	$servername = "localhost";
	$username = "root";
	$password = "projectcube";
	$dbname = "project2";
    $stock = 6050965;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT stock,identifier FROM Brick";
$ceros = $conn->query($sql);

if ($ceros->num_rows > 0) {
    // output data of each row
    while($row = $ceros->fetch_assoc()) {
		if($row["identifier"]== $stock)
		{echo $row["stock"]."<br>";}
    }
} else {
    echo "0 results";
}
$conn->close();
?>

