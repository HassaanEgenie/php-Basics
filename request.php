<!DOCTYPE html>
<html>
<body>

<form method="post" action="request.php">
  Name: <input type="text" name="fname">
  phone: <input type="text" name="phone">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    $phone=$_REQUEST['phone'];
    echo$phone."<br>";
    echo$name."<br>";
}
?>

</body>
</html>