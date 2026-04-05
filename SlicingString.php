<!-- Slicing a String -->

<?php 
$x = "Hello World!";
echo substr($x,6,5);
echo "<br>";
?>

<!-- Slice String to the End -->

<?php 
$x = "Hello World!";
echo substr($x,6);
echo "<br>";
?>

<!-- Slice string from the end -->

<?php 
$x = "Hello World";
echo substr($x,-5,3);
echo "<br>";
?>

<!-- Negative Length -->

<?php 
$x = "Hi, How are you?";
echo substr($x, 5,-3);
?>