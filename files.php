<?php
echo "<pre>"; 
print_r($_FILES);

echo "</pre>"; 
?> 
<form action="" method="post" enctype="multipart/form-data"> 
<input type="file" name="file" multiple> 

<input type="submit" value="Upload Image"> 
</form> 
