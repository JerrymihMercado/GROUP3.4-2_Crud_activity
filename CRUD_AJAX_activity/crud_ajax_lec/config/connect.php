<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bsit_studentDB";

    $connection = mysqli_connect($servername, $username, $password, $db);
    if (!$connection) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>