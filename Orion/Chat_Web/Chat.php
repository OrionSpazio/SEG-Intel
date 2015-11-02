<!Doctype html>
<html>
<body>
<?php
include ('Index_ChatWeb.php');
$servername = "us-cdbr-azure-northcentral-a.cleardb.com";
$username = "baf69364474490";
$password = "e8c2966f";
$dbname = "seg-intel";
$text = $_POST["text"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO communications (idcommunications)
VALUES ('$text')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
include('Index_ChatWeb.html')
?>
</body>
</html>