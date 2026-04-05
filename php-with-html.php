<?php 
$h2_color="Brown";
echo "<h1 style='color:green'>PHP with html</h1>";
echo "<h2 style='color:red'>Ravi kumar</h2>";
?>

<?php 
$name = "Ravi kumar";
echo "<h1 style='color: blue'>My Name is ".$name."</h1>";
?>

<h1 style='color: orange'>
    This is my real name <?php echo $name;?>
</h1>

<h2 style='color:<?php echo $h2_color;?>'>
    <?php echo "This is h2 page"?>
</h2>
<h2 style='color:<?php echo $h2_color;?>'>
    <?php echo "My name is Raj"?>
</h2>
<h2 style='color: <?php echo $h2_color;?>'>
    <?php echo "This is My Laptop" ?>
</h2>

