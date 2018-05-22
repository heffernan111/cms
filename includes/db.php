<?php



$db['db_host'] = "localhost";
$db['db_user'] = "homestead";
$db['db_password'] = "secret";
$db['db_name'] = "cms";

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

// if ($connection) {
// 	echo "connected";
// }else{
// 	echo "error";
// }





?>