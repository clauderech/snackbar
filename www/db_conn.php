<?php

$host = 'db';
$username = 'root';
$password = 'root';
$db = 'snackbar';
try {
        $conn = new PDO('mysql:host=' . $host . ';dbname=' . $db, $username, $password, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
    }
?>