<?php
session_start();
?>


<!DOCTYPE html>
<html>
<body>

<?
 
$_SESSION["Admin"]="Ali";
$_SESSION["color"]="Blue";
$_SESSION["food"]="brayani";
$_SESSION["color"]="green";
print_r($_SESSION["color"]);

?>



</html>
</body>