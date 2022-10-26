<!-- step 1: connect to the php to database -->

<?php
//database path
$host="localhost";
$user="root";
$dbpass="";
$db="userdb";

//connect to the Database
$database = new mysqli($host,$user,$dbpass,$db);
// print_r($database);




//connection status checking

/*if ($database->connect_errno) {
        echo "Failed to connect to MySQL: (" . $database->connect_errno . ") " . $database->connect_error;
    } else {
        echo "Connected to MySQL";
    }
    */
?>