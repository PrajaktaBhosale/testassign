<?php

    // function declaration
    // parameterless
    function function1() {
        echo "inside function1 <br/>";
    }
    
    // function invocation
    function1();
    
    
    // parameterize function
    function add($num1, $num2) {
        $answer = $num1 + $num2;
        echo "Answer = $answer <br/>";
    }
    
    add(100, 100);

    function multiply($num1, $num2) {
        $answer = $num1 * $num2;
        return $answer;
    }
    
    multiply(100, 100);
    
    $answer = multiply(20, 20);
    echo "Answer = $answer <br/>";
    
    
    
    
    
    
    
    
    
    
    