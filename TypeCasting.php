<!-- Cast to String -->
 <h1>Cast to String</h1>
<?php 
    $a = 5;                      // Integer
    $b = 5.34;                  //Float
    $c = "Hello";               //String
    $d = true;                  //Boolean
    $e = NULL;                  //NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $d = (string) $e;

    // Use var_dump() to verify the data type

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
?>

<p>When casting a Boolean into string, it gets the value "1" or "".</p>
<p>When casting NULL into string, it gets the value "".</p>

<h1>Cast of Integers</h1>
<pre>
    <?php
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "25 km"; // String
        $d = "km 25"; // String
        $e = "hello"; // String
        $f = true;    // Boolean
        $g = NULL;    // NULL

        $a = (int) $a;
        $b = (int) $b;
        $c = (int) $c;
        $d = (int) $d;
        $e = (int) $e;
        $f = (int) $f;
        $g = (int) $g;

        // Use var_dump() to verify the data type
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($e);
        echo "<br>";
        var_dump($f);
        echo "<br>";
        var_dump($g);
    ?> 
</pre>

<p>When casting a string that starts with a number, (int) gets that number.</p>
<p>If the string does not start with a number, (int) convert strings to 0.</p>

<h1>Cast of Float</h1>
<pre>
    <?php
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "25 km"; // String
        $d = "km 25"; // String
        $e = "hello"; // String
        $f = true;    // Boolean
        $g = NULL;    // NULL

        $a = (float) $a;
        $b = (float) $b;
        $c = (float) $c;
        $d = (float) $d;
        $e = (float) $e;
        $f = (float) $f;
        $g = (float) $g;

        // Use var_dump() to verify the data type
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($e);
        echo "<br>";
        var_dump($f);
        echo "<br>";
        var_dump($g);
    ?> 
</pre>

<p>When casting a string that starts with a number, (float) gets that number.</p>
<p>If the string does not start with a number, (float) convert strings to 0.</p>

<h1>Cast of Boolean</h1>
<pre>
    <?php
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = 0;       // Integer
        $d = -1;      // Integer
        $e = 0.1;     // Float
        $f = "hello"; // String
        $g = "";      // String
        $h = true;    // Boolean
        $i = NULL;    // NULL

        $a = (bool) $a;
        $b = (bool) $b;
        $c = (bool) $c;
        $d = (bool) $d;
        $e = (bool) $e;
        $f = (bool) $f;
        $g = (bool) $g;
        $h = (bool) $h;
        $i = (bool) $i;

        // Use var_dump() to verify the data type
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($e);
        echo "<br>";
        var_dump($f);
        echo "<br>";
        var_dump($g);
        echo "<br>";
        var_dump($h);
        echo "<br>";
        var_dump($i);
    ?> 
</pre>

<p>If a value is 0, NULL, false, or empty, (bool) converts it to false, otherwise true.</p>

<h1>Cast of Array</h1>
<ore>
    <?php
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "hello"; // String
        $d = true;    // Boolean
        $e = NULL;    // NULL

        $a = (array) $a;
        $b = (array) $b;
        $c = (array) $c;
        $d = (array) $d;
        $e = (array) $e;

        // Use var_dump() to verify the data type
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($e);
    ?> 
</pre>

<p>When casting to array, most data types converts into an indexed array with one element.</p>
<p>NULL values converts into an empty array object.</p>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);?>

<h1>Cast of Object</h1>
<pre>
    <?php
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "hello"; // String
        $d = true;    // Boolean
        $e = NULL;    // NULL

        $a = (object) $a;
        $b = (object) $b;
        $c = (object) $c;
        $d = (object) $d;
        $e = (object) $e;

        // Use var_dump() to verify the data type
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($e);
    ?> 
</pre>

<p>When casting to object, most data types converts into an object with one property, named "scalar", with the corresponding value.</p>

<p>NULL values converts to an empty object.</p>
<pre>
    <?php
        $a = array("Volvo", "BMW", "Toyota"); // indexed array
        $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

        $a = (object) $a;
        $b = (object) $b;

        var_dump($a);
        var_dump($b);
    ?> 
</pre>

<p>Indexed arrays convert into objects with the index number as property name and the value as property value.</p>

<p>Associative arrays convert into objects with the keys as property names and values as property values.</p>



</pre>
