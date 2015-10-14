<?php

    $count = 100;
    
    function function1() {
        echo "inside function1 <br/>";
        
        $count = 200;
        echo "Count = $count <br/>";
        
        global $count;
        echo "Count = $count <br/>";

        $count = 300;
        echo "Count = $count <br/>";
    }
    
    function function2() {
        echo "inside function2 <br/>";
        
        global $count;
        echo "Count = $count <br/>";
    }

    function1();
    function2();