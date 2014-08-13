<?php

define('DB_NAME','listening');
define('DB_USER','root');
define('DB_PASSWORD','asdf123');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Couldnot connect ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME,$link);

if (!db_selected) {
	die( 'Cant use' . DB_NAME  );
}

echo 'Connected successfully' ;

$value = $_POST['equation'];

$sql = "INSERT INTO test ( equation) VALUES ('$value')";

if (!mysql_query($sql)) {
       die('Error: ' .mysql_error());
	}


mysql_close();
?>
