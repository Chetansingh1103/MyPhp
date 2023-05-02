<?php 

echo "Welcome to the world of foreach loops <br>";
$arr = array("bananas", "apples", "Harpic", "Bread", "Butter");

// for($i = 0; $i < count($arr); $i++){
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - foreach loops

foreach($arr as $val){
    echo "$val <br>";
}

?>