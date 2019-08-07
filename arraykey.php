<?
$colours = array("red", "blue", "green", "yellow");
echo ($colours[1] . "<br>");
print_r(array_keys($colours));
$income = array("Ali" => "3500", "Hamza" => "4500", "Qamar" => "5500");
print_r(array_keys($income));
echo "<br>";
//array key is nothing but the index of the element of array
echo array_search("Qamar", array_keys($income));
?>