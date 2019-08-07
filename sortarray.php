<?
$colours=array("red","blue","green","yellow");
sort($colours);//ascending


foreach($colours as $values){
    echo($values."<br>");
}

echo"<br>";
rsort($colours);//descending
foreach($colours as $values){
    echo($values."<br>");
}

$income=array("Ali"=>"3500","Hamza"=>"4500","Qamar"=>"5500");
ksort($income);//sort in asending order according to key
echo"<br>";
foreach($income as $array){
    echo($array."<br>");
    
}

krsort($income);//sort in descending order according to key
echo"<br>";
foreach($income as $array){
    echo($array."<br>");
    
}

asort($income);//sort in sscending order acc to value
echo"<br>";
foreach($income as $array){
    echo($array."<br>");
    
}

arsort($income);//sort in descending order acc to value
echo"<br>";
foreach($income as $array){
    echo($array."<br>");
    
}
?>