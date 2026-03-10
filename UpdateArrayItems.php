<pre>
    <?php 
        $cars = array("Volvo", "BMW", "Toyoto");
        $cars [1] = "Ford";
        var_dump ($cars);
    ?>
</pre>

<h2>Update Array Items in a foreach Loops</h2>

<pre>
    <?php 
        $cars = array("Volvo", "BMW", "Toyoto");
        foreach($cars as &$x){
            $x = "Ford";
        }
        unset($x);
        var_dump($cars);
    ?>
</pre>

<h2>unset() Functions.</h2>

<pre>
    <?php 
        $cars = array("Volvo", "BMW", "Toyoto");
        foreach($cars as &$x){
            $x = "Ford";
        }
        $x = "Train";
        var_dump ($cars);
    ?>  
</pre>

