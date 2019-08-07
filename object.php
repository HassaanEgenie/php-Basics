<?
class Books { 
  
  /* Member variables */
  var $price; 
  var $title; 
    
  /* Member functions */
  function setPrice($par){ 
     $this->price = $par; 
  } 
    
  function getPrice(){ 
     echo $this->price."<br>"; 
  } 
    
  function setTitle($par){ 
     $this->title = $par; 
  } 
    
  function getTitle(){ 
     echo $this->title."<br>" ; 
  } 
} 

$physics=new Books;
$math= new Books;

$physics-> setPrice(700);
$physics-> setTitle("physics for 9th class");

$physics-> getPrice();
$physics-> getTitle();

Class House{
    var $price;
    var $location;

    function setPrice($pa){
        $this->price=$pa;
    }
    function getPrice(){
       echo  $this->price."<br>";
    }
    function setLoc($ma){
        $this->location."<br>";
    }
    function getLoc(){
       echo  $this->location."<br>";
    }
}

$House1=new House;
$House1->setPrice(800000);
$House1->getPrice();

?>