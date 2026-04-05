<h1>PHP Magic CONSTANT</h1>

<h1>This Constant returns the class name.</h1>

<?php 
class Fruits {
    public function myValue() {
        return __CLASS__;
    }
}
$kiwi = new Fruits();
echo $kiwi -> myValue();
?>

<h1>This constant returns the directory name of the file</h1>

<?php 
echo __DIR__;

?>

<h1>This constant returns the full path and the name of the file.</h1>

<?php 
echo __FILE__;

?>

<h1>This constant returns the function name:</h1>
<?php 
function myMessage() {
    return __FUNCTION__;
}
echo myMessage();
?>