<?php
	
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'prom_db';

  $dsn = 'mysql:host='. $host .';dbname=' .$dbname;

  $link = new PDO($dsn, $user, $password);
  $link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $link->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  // if($link){
  // 	echo "connected";
  // } else {
  // 	echo "Not connected";
  // }
?>