<html>
<body>
<?php
$servername = "us-cdbr-azure-northcentral-a.cleardb.com";
$username = "baf69364474490";
$password = "e8c2966f";
$dbname = "seg-intel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT idcommunications FROM communications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idcommunications"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>