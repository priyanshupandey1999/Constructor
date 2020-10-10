<?php

    /*------------------------Creating Database ----------------------------*/
    $servername = "localhost";//server name should be mentioned here
    $username = "root";//username for the server will be here by default it root
    $password = "";//for root user their is no password

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database

    $sql = "CREATE DATABASE IF NOT EXISTS Constructor";
    if ($conn->query($sql) === TRUE) 
    {
        // echo "Database is presesnt<br>";
    } 
    else 
    {
        echo "Error creating database: " . $conn->error;
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, "Constructor");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        // echo "Connection to database successful<br>";
    }


?>