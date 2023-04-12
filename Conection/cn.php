<?php

try {

    $db = new mysqli("db4free.net","admin31","730ee0ac","dbpruebas_proyec");
} catch (Exception $ex) {
    echo "<h3>". $ex->getMessage()."<h3>";
}
