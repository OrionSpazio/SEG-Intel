<!Doctype html>
<html>
<head>
<title>Chat Web</title>
<embed src="../Resources/ORION_Logo.jpg" width="100%">
</head>
<body>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="../../Index.html">Intel</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Team<span class="sr-only">(current)</span></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages Tests<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../../poirier/page_jolain.html">Jolain</a></li>
            <li class="divider"></li>
            <li><a href="../../page_kole.html">Kone</a></li>
            <li class="divider"></li>
            <li><a href="../Index_Orion.html">Gabriel</a></li>
          </ul>
          <li><a href="Index_ChatWeb.html">Chat Web</a></li>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<center>
<textarea cols="100" rows="15" readonly>
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
        echo $row["idcommunications"]. "&#13;&#10;";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</textarea>

<form action="Chat.php" method="post">
<textarea type="text" name="text" wrap="soft" rows="10" cols="100" >
</textarea>
<br>
Nom:<input type="text" name="name" size="15"><br>
Password:<input type="text" name="password"><br>
<input type="submit">
</center>
</form>
</body>
</html>