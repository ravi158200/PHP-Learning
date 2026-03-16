<?php
    $cars = array (
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
    );
    
    echo $cars[0][0]. ": In stock: " .$cars[0][1]. ", sold: " .$cars[0][2].".<br>";
    echo $cars[1][0]. ": In stock: " .$cars[1][1]. ", sold: " .$cars[1][2].".<br>";
    echo $cars[2][0]. ": In stock: " .$cars[2][1]. ", sold: " .$cars[2][2].".<br>";
    echo $cars[3][0]. ": In stock: " .$cars[3][1]. ", sold: " .$cars[3][2].".<br>";
?>

<h2>Looping Through Multidimesional Arrays.</h2>

<?php 
    $cars = array(
        array("Volvo",22, 18), 
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    for($row = 0; $row < 4; $row++){
        echo "<p> <br> Row Number $row";
        echo "</ul>";

        for($col = 0; $col < 3; $col++){
            echo "<li>" .$cars [$row][$col]."</li>";
        }
        echo "</ul>";
    }
?>

<h2>Foreach loops array</h2>
<style>
    table, td,th{
        border: 1px solid #0f0e0e;
        text-align: center;
    }

    table{
        border-collapse: collapse;
        width: 100%;
    }

    th, td{
        padding: 10px;
    }
</style>

<?php 
     $cars = array(
        array("Volvo",22, 18), 
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    echo "<table>";

        echo "<tr>
            <th>Brand</th>
            <th>Stock</th>
            <th>Sold</th>
        </tr>";

        foreach($cars as $row){
            echo "<tr>";
            foreach($row as $cell){
                echo "<td>" .$cell. "</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
?>