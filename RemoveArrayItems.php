<h2>1. array_splice() Functions.</h2>

<pre>
    <?php 
        $cars = array("Volvo","BMW", "Toyoto");
        array_splice($cars,1,1);
        var_dump($cars);
    ?>
</pre>

<h2>2. Remove Multiple Array items.</h2>

<pre>
    <?php 
        $cars = array("Volvo", "BMW", "Toyoto");
        array_splice($cars,1,2);

        var_dump($cars);
    ?>
</pre>

<h2>3. unset() Functions</h2>

<pre>
    <?php 
        $cars = array("Volvo", "BMW", "Toyoto");
        unset($cars [1]);

        var_dump($cars);
    ?>
</pre>

<h2>4. Remove Multiple Array Items.</h2>

<pre>
    <?php 
        $cars = array("Volvo", "BMW", "Toyoto");
        unset($cars [0], $cars[1]);

        var_dump($cars);
    ?>
</pre>

<h2>5. Remove Items from an Associative Array</h2>

<pre>
    <?php 
        $cars = array("Brand"=> "Ford", "Model"=> "Mustang", "Years"=> 1964);
        unset($cars["Model"]);
        var_dump($cars);
    ?>
</pre>

<h2>6. array_diff() Functions.</h2>

<pre>
    <?php 
        $cars = array("Brand"=> "Ford", "Model"=> "Mustang", "Years"=> 1964);
        $newarray = array_diff($cars, ["Mustang", "1964"]);
        var_dump($newarray);
    ?>
</pre>

<h2>7. array_pop - Remove Last Array Items.</h2>

<pre>
    <?php 
        $cars = array("Volvo", "BMW", "Toyoto");
        array_pop ($cars);
        var_dump($cars);
    ?>
</pre>

<h2>8. array_shift - Remove first Array Items.</h2>

<pre>
    <?php 
        $cars = array("Volvo", "BMW", "Toyoto");
        array_shift($cars);
        var_dump($cars);
    ?>
</pre>