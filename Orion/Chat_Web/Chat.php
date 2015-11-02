<!Doctype html>
<html>
<body>
<?php
$servername = "us-cdbr-azure-northcentral-a.cleardb.com";
$username = "baf69364474490";
$password = "e8c2966f";
$dbname = "seg-intel";
$array = array($_POST["name"],"<br>","	",$_POST["text"],"<br>","<br>");
$text = implode("",$array);

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
header("Location: http://seg-intel.azurewebsites.net/Orion/Chat_Web/Index_ChatWeb.php");
?>
</body>
</html>