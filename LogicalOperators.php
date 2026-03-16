<?php 
    $a = 200;
    $b = 30;
    $c = 500;

    if ( $a > $b && $a < $c ) {
        echo "Both conditions is true";
    }
?>

<h1>The && Operator</h1>

<p>Write a message if both conditions are true.</p>

    <?php
        $x = 100;  
        $y = 50;

        if ($x == 100 && $y == 50) {
            echo "Hello world!";
        }
    ?> 

<h1>The or Operator</h1>

<p>Write a message if at least one of the conditions are true.</p>

<?php
    $x = 100;  
    $y = 50;

    if ($x == 100 or $y == 80) {
        echo "Hello world!";
    }
?> 

<h1>The || Operator</h1>

<p>Write a message if at least one of the conditions are true.</p>

<?php
    $x = 100;  
    $y = 50;

    if ($x == 100 || $y == 80) {
        echo "Hello world!";
    }
?> 

<h1>The xor Operator</h1>

<p>Write a message if one of the conditions are true, bot not if both conditions are true.</p>

<?php
    $x = 100;  
    $y = 50;

    if ($x == 100 xor $y == 80) {
        echo "Hello world!";
    }
?>  

<h1>The ! Operator</h1>

<p>Write a message if the condition is NOT true.</p>

<?php
    $x = 100;  

    if (!($x == 90)) {
        echo "Hello world!";
    }
?>  

<?php
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
?> 