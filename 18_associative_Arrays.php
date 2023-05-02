<?php 
echo "Welcome to associative arrays in php <br>";

// $arr = array('this','that','what');
// echo $arr[0] . "<br>";
// echo $arr[1] . "<br>";
// echo $arr[2] . "<br>";


// Associative arrays
$favCol = array(
         'shubham' => 'red',
         'harry' => 'green',
         'chetan' => 'white',
         'ankit' => 'pink',
         '8' => 'this');

foreach($favCol as $key => $val){
    echo "<br> Favorite color of $key is $val";
}


// echo $favCol['harry'] . "<br>";
// echo $favCol['chetan'] . "<br>";
// echo $favCol['8'] . "<br>";


?>