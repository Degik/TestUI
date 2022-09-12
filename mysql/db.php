<?php
require('mySql.php');
require('mySqlQuery.php');

// Insert host (Default is localhost or 127.0.0.1)
define('MYSQL_HOST', '127.0.0.1');
// Insert username for login
define('MYSQL_USER', 'root');
// Insert password (defualt is empty)
define('MYSQL_PASSWORD', '');
// Insert database name
define('MYSQL_DATABASE', 'server');


$database = new MySqlQuery();
$database->createConnection();
?>