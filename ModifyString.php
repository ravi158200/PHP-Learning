<!-- Upper Case String -->

<?php 
$x = "Hello World!";
echo strtoupper($x);
echo "<br>";
?>

<!-- Lower Case String -->

<?php 
$x = "Hello World!";
echo strtolower($x);
echo "<br>";
?>

<!-- Replace String -->

<?php 
$x = "Hello World!";
echo str_replace("World","Ravi", $x);
echo "<br>"
?>

<!-- Reverse a String -->

<?php 
$x = "Hello World!";
echo strrev($x);
echo "<br>";
?>

<!-- Remove WhiteSpace -->

<?php 
$x = "Hello World!";
?>
<p>The whitespace are invisible in plain HTML, <br> But check out the difference in two input field</p>
<?php 
echo "<input value='".$x."'>";
echo "<br>";
echo "<input value='".trim($x)."'>";
echo "<br>";
?>

<!-- Convert Sting into Array -->

<?php 
$x = "Hello Lovely World!";
$y = explode ("  ",$x);

//use print_r to display the result

print_r($y);
?>