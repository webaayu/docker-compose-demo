<?/*php

$username = "root";
$password = "";
$dbname = "myDB1";
$servername="localhost";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
*/?>

<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'MYSQL_DATABASE';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);
?>
