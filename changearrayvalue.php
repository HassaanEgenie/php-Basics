<?
$colours=array("red","blue","green","yellow");
echo($colours[1]."<br>");//displays blue
$colours[4]="pink";//adding value in array
$colours[1]="brown";
$colours[0]="purple";//updating value at 0 index

$income=array("Ali"=>"3500","Hamza"=>"4500","Qamar"=>"5500");
$income["Ali"]="6500";
$income["Ramzan"]="6700";

foreach($income as $array){
    echo($array."<br>");
    
}

?>