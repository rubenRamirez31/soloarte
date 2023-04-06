<?php
$user = "root";
$pwd = "root";
$dbname = "MapachesArticulos";
$host = "localhost";

try {
    $cn = new PDO(
        "mysql:host=$host; dbname=$dbname",
        $user,
        $pwd,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "Set names utf8"));
} catch (Exception $ex) {
    echo "<h3>". $ex->getMessage()."<h3>";
}
