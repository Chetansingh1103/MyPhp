<?php 

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);




// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error() . "<br>");
}
else{
    echo "Connection was successful <br>";
}

// Create a db
$sql = "CREATE DATABASE chetan3";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if ($result) {
    echo "the db was created succesfully! <br>";
}
else{
    echo "the db was not created succesfully because of this error --> " . mysqli_error($conn) . "<br>" ;
}


echo "The result is ";
echo var_dump($result);
echo "<br>";
?>