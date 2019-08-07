<?
$colours=array("red","blue","green","yellow");
echo($colours[1]."<br>");//displays blue
$colours[2]="pink";
$colours[1]="brown";
$colours[3]="brown";

echo($colours[1]."<br>");//updated display brown

$income=array("Ali"=>"3500","Hamza"=>"4500","Qamar"=>"5500");

echo($income["Hamza"]."<br>");//old value

$income["Hamza"]="6000";//updated value

echo($income["Hamza"]."<br>");

$income["Ahmar"]="60000";
echo($income["Ahmar"]."<br>");



$players = array (
    array (
        "id"        => 0,
        "name"      => "John",
        "points"    => 0
    ),

    array (
        "id"        => 1,
        "name"      => "Chris",
        "points"    => 0
    ),
);

foreach($players as $array){
    if( $array["id"]==1){
        $array["name"]="Ali";//updating value
        $array["points"]="2";

    }
    foreach($array as $values){
       echo($values."<br>");
     
    
    }
}


?>