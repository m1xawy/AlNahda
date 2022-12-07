<?php

ini_set("display_errors", 1);

$db_host = 'localhost';
$db_name = 'alnahda';
$db_user = 'root';
$db_pass = '';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", "$db_user", "$db_pass",
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (PDOException $e) {
    die($e->getMessage());
}
