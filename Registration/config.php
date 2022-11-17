<?php 
#add databases cresenditals of new customers 
define('DB_NAME' , 'Registration');
define('DB_USER', 'Admin_user');
define('DB_PASSWORD', 'QWE$RTY&UIO)');
define('DB_HOST', 'localhost');

#connect the database values to mysqli_connect
$connection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME );
#add conditional to see if the database is connected 
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>