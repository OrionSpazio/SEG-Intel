<html>
<body>
<?php
$myfile = fopen("Testfile.txt",a) or die("NOOOOO");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<li><a href="Index_ChatWeb.html"></a></li>
</body>
</html>