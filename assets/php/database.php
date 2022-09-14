<?php
$user = "root";
$password = "";
$database = "mysql:host=localhost;dbname=hackers-poulette;charset=utf8";
$db= null;

try {
    $db = new PDO($database,$user,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
    echo $e->getMessage();
}