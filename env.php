
<!DOCTYPE html>
<html>
<body>

<form method="get" action="get.php">
  Name: <input type="text" name="fname">
  phone: <input type="text" name="phone">
  <input type="submit">
</form>

<pre>
<?php
    putenv('name=hamid');
    // collect value of input field

    print_r($_ENV['name']);
//     $name =$_GET['fname'];
//     $phone=$_GET['phone'];
//     echo$phone."<br>";
//     echo$name."<br>";


?>
</pre>
</body>
</html>

