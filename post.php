<!DOCTYPE html>
<html>
<body>

<form method="post" action="post.php">
  Name: <input type="text" name="fname">
  phone: <input type="text" name="phone">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name =$_POST['fname'];
    $phone=$_POST['phone'];
    echo$phone."<br>";
    echo$name."<br>";
}
?>

</body>
</html>