<?php

    $colors = array("red", "black", "white");
    var_dump($colors);
    echo "<br/>";
    
    echo "color at 0 = " . $colors[0] . "<br/>";
    echo "color at 1 = " . $colors[1] . "<br/>";
    echo "color at 2 = " . $colors[2] . "<br/>";
    
    echo "<br/>";
    
    $num = array(12, 34, 45, 56, 6, 56, 67, 8);
    var_dump($num);
    echo "<br/>";
    
    for ($index = 0; $index < count($num); $index++) {
        echo "value at " . $index . " = "
                    . $num[$index] . "<br/>";
    }
    
    echo "<br />";
    
    $mixed = array(10, "test", 5, 56, "test2");
    var_dump($mixed);
    echo "<br/>";
    for ($index = 0; $index < count($mixed); $index++) {
        echo "Value at $index = $mixed[$index] <br/>";
    }