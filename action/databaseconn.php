<?php
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $database = "medicita";

    $conn = mysqli_connect($servername, $username, $password,$database);
    if (!$conn) 
    {
        echo "Connection Failed";
        exit;
    }
?>