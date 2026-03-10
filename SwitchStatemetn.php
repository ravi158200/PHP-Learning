<h1>Switch Statement</h1>

<?php 
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green";
    

}
?>

<h1>break keyboard</h1>

<?php 
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red";
        
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green";
    

}
?>

<h1>Default Statement</h1>

<?php 
$d = 1;
switch ($d) {
    case 6:
        echo "Today is Sunday";
        break;
    case 0:
        echo "Today is Monday";
        break;
    default:
        echo "looking forword to the keyboard";
}
?>

<h1>Combining Cases</h1>

<?php
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The week feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are best!";
    break;
  default:
    echo "Something went wrong";
}
?>