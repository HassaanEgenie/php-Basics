<?php
$cookie_name="admin";
$cookie_value="Hassaan";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie("user","Ali",time()+(86400*30),"/");
setcookie("favcolour","blue",time()+(86400*30),"/");
setcookie("favcolour","blue",time() -3600,"/");
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
    echo "Cookie is enabled";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie is disabled";
   
}

?>

</body>
</html>