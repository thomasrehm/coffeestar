<?php


//session_start();

$host = "localhost";

$username = "root";

$password = "";

$db = "coffeestar";


$link = @mysql_connect($host, $username, $password) or die ("Datenbankfehler");


mysql_set_charset('utf8', $link);

@mysql_select_db($db) or die("error");









?>