<?php


// pdo = php data object

//  we use mysqli here 
// defining constants
define('DB_HOST', 'localhost');
define('DB_USER', 'brad');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

// Create a connection
 $conn  = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check Connection
if($conn -> connect_error){
    die('Connection Failed: ' . $conn->connect_error);
    // die cuts everything off
}

// echo 'CONNECTED! ';

?>
