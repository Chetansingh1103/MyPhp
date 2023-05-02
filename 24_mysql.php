<?php 
echo "Welcome to the stage where we are ready to get connected to a database <br>";

/* Ways to connect to a MySql Database
1. MySqLi extension (if using mysql then this is best)
2. PDO (to integrate with any other database in future)
*/

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);


// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect:" . mysqli_connect_error());
}
else{
    echo "Connection was successful";
}



?>