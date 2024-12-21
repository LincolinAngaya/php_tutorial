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


// function add_five(&$value){
//     $value+= 5;
// }
// $num = 2;
// add_five($num);
// echo $num;




//use the switch statement to select one of many blocks of code to be executed.
$color = 'red';
switch ($color){
    case 'red':
        echo "<h2>your favorite color is red </h2>";
        break;
    case "white":
        echo "your favorite color is white";
        break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
          case "green":
            echo "Your favorite color is green!";
            break;
          default:
            echo "Your favorite color is neither red, blue, nor green!";
}

echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>