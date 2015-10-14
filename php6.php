<?php

    $count = 100; // global

    function function1() {
        global $count;
        
        $num = 10; // local
        echo "inside function1 <br />";
        echo "Num = $num <br />";
        echo "Count = $count <br />";
    }

    function function2() {
        global $count;
        
        echo "inside function2 <br />";
        echo "Num = $num <br />";
        echo "Count = $count <br />";
    }
    
    function function3() {
        static $index = 0;
        echo "Index = $index <br/>";
        $index++;
    }
    
    function1();
    function2();
    
    echo "outside of any function <br />";
    echo "Count = $count <br />";

    function3();
    function3();
    function3();
    function3();
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    