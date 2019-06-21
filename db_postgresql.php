<?php

$host = 'ec2-107-22-238-217.compute-1.amazonaws.com';
$dbname = 'd1lpmotob1eqbv';
$username = 'twhxuqczizesmm';
$password = '007e45932c801779f5f77929fbb9da0258f1f9763ef127f3447a31622b174a84';
$port = '5432';

$db = new PDO("pgsql:host=$host;dbname=$dbname" . ";options='-c client_encoding=utf8'", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

include 'functions.php';

?>
