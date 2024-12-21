<?php
// function myMessage() {
//     echo "Hello world!";
//   }
  
//   myMessage();



// function familyName($fname, $year){
//     echo "$fname lincolin.<br>";
//     echo "$year yers old";

// }
// familyName("Angaya", "21");


// function setHeight ($minHeight = 45){

// echo "the height is  : $minHeight <br>";

// }
// setHeight(25);


// function sum($x, $y){
//     $z = $x + $y;
//      return $z;


// }
// echo sum(4,5);


function add_five(&$value){
    $value+= 5;
}
$num = 2;
add_five($num);
echo $num;
?>