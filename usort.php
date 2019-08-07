<?php
function user_compare($x, $y)
{
if ($x == $y)
return 0;
else if ($x > $y)
return 1;
else
return -1;
}
$array1 = array(22,33,66,55,11);
usort($array1, 'user_compare');
foreach($array1 as $key => $value)
{
echo "$key: $value\n";
}
?>