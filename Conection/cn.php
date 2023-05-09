<?php

try {

    $db = new mysqli("database-2.cieq3dfbzdfd.us-east-2.rds.amazonaws.com","admin","BT8OuIqJh6BF4Z8AsquH","soloarte");
} catch (Exception $ex) {
    echo "<h3>". $ex->getMessage()."<h3>";
}
