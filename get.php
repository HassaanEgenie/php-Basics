<!DOCTYPE html>
<html>
<body>

<form method="get" action="get.php">
  Name: <input type="text" name="fname">
  phone: <input type="text" name="phone">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $name =$_GET['fname'];
    $phone=$_GET['phone'];
    echo$phone."<br>";
    echo$name."<br>";
}
?>

</body>
</html>