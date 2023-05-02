<?php 
echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach($marksArr as $val){
        $sum += $val;
    }
    return $sum;
}
function avgMarks($marksArr){
    $sum = 0;
    foreach($marksArr as $val){
        $sum += $val;
    }
    return $sum / count($marksArr);
}

$rohan = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohan);
$averageMarks = avgMarks($rohan);
$harry = [99, 98, 93, 94, 17, 100];
$sumMarksharry = processMarks($harry);
$averageMarksharry = avgMarks($harry);

echo "total marks scored by rohan out of 600 is $sumMarks and average marks obtained is $averageMarks <br>";
echo "total marks scored by rohan out of 600 is $sumMarksharry average marks obtained is $averageMarksharry <br>";

?>