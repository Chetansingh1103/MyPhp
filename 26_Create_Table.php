<?php 

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "chetan";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error() . "<br>");
}
else{
    echo "Connection was successful <br>";
}


// Create table in the db
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`)) " ;

$result = mysqli_query($conn, $sql);

// Check for the table creation success
if ($result) {
    echo "the table was created succesfully! <br>";
}
else{
    echo "the table was not created succesfully because of this error --> " . mysqli_error($conn) . "<br>" ;
}

?>