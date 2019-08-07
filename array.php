<?
$colours = array("red", "blue", "green", "yellow"); //
foreach ($colours as $x => $x_value) {
    echo ("index is $x and value is $x_value <br>");
}

$arrylength = count($colours);

echo $arrylength;
echo "<br>";

$income = array("Ali" => "3500", "Hamza" => "4500", "Qamar" => "5500");

foreach ($income as $x => $x_value) {
    echo ("name is $x and income is $x_value <br>");
}
