<?php 
echo "Welcome to scope and local/global vars in PHP <br>";

$a = 98; // global variable

function printValue(){
    // $a = 97; // local variable

    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "The value of your variable a is $a and b is $b <br>"; 

}

echo $a;
printValue();
echo "The value of your variable a is $a and b is $b <br>";

// echo var_dump($GLOBALS); // shows the array of global which has global variables

echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>