<?php
    $host     = "localhost";//Ip of database, in this case my host machine    
    $user     = "root";	//Username to use
    $pass     = "usbw";//Password for that user
    $dbname   = "helpline";//Name of the database

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    if(!$conn) {
        die("Error: Failed to connect to the database!");
    }
?>