<h1>While Loops</h1>

<?php 
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
?>

<h1>Break Statement</h1>

<?php 
$i = 1;
while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
}
?>

<h1>Continue Statement</h1>

<?php 
$i = 0;
while ($i <6) {
    $i++;
    if ($i == 3) continue;
    echo $i;
}
?>

<h1>Alternative Syntex</h1>

<?php 
$i = 1;
while ($i < 6):
    echo $i;
    $i++;
endwhile;
?>

<h1>Do While Loops</h1>

<?php 
$i = 1;
do {
    echo $i;
    $i++;
} while($i < 6);
?>

<?php 
$x = 8;
do {
    echo $x;
    $x++;
} while($x < 6);
?>

<h1>Break Statement</h1>

<?php 
$i = 1;
do {
    if ($i ==3) break;
    echo $i;
    $i++;
}while($i < 6);
?>

<h1>Continue Statment</h1>

<?php  
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
?> 

<h1>For Loops</h1>

<?php 
for ($x = 0; $x <= 10; $x++){
    echo "The number is: $x <br>";
}
?>

<h1>Decrease Counter Variable</h1>

<?php 
for ($x = 10; $x >= 0; $x--) {
    echo "The number is: $x <br>";
}
?>

<h1>Break Statement</h1>

<?php 
for ($x =0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
}
?>

<h1>Continue Statement</h1>

<?php 
for ($x = 0; $x <= 10; $x++){
    if ($x == 3) continue;
    echo "The number is: $x <br>";
}
?>

<h1>Count to 100 by tens</h1>

<?php  
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>  
<h1>Foreach Loops</h1>

<?php 
$color = array("red", "green", "blue", "yellow");
foreach ($color as $value){
    echo "$value <br>";
}
?>

<h1>Foreach Loops on Associative Array</h1>

<?php 
$member = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach ($member as $key => $value){
    echo "$key : $value <br>";
}
?>

<h1>Foreach Loops on Objects</h1>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y<br>";
}
?>

<h1>Break Statement</h1>

<?php 
$color = array("red", "green", "blue", "yellow");
foreach ($color as $value) {
    if ($value == "blue") break;
    echo "$value <br>";
}
?>

<h1>Continue Statement</h1>

<?php 
$color = array ("red", "green", "blue", "yellow");
foreach ($color as $value) {
    if ($value == "blue") continue;
    echo "$value <br>";
}
?>

<h1>Foreach loops Byref</h1>
<pre>
    <?php
     $color = array ("red", "green", "blue", "yellow");
     foreach ($color as $x) {
        if ($x == "blue") $x = "pink";
     }
     var_dump ($color);
    ?>
</pre>

<h1>Alternative Syntex</h1>


    <?php 
        $color = array ("red", "green", "blue", "yellow");
        foreach ($color as $x):
            echo "$x <br>";
        endforeach;
    ?>
