<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$dbname = getenv('DB_NAME');
$password = getenv('DB_PASSWORD');
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);


