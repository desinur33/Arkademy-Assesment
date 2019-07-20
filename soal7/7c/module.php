<?php

$serv = "localhost";
        $usr = "root";
        $pass = "251199";
        $db = "arka_db";
        
$conn = new mysqli($serv, $usr, $pass, $db);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

