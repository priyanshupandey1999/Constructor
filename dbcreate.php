

<?php include 'dbconnect.php'?>

<?php

// // sql to create table for galleryImages
// $sql = "CREATE TABLE IF NOT EXISTS galleryImages(
//     ImageId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     ImagePath VARCHAR(30) NOT NULL,
//     CompanyName VARCHAR(30) NOT NULL,
//     label VARCHAR(70) NOT NULL UNIQUE
// )";

// if ($conn->query($sql) === TRUE) {
//     // echo "Table for user gallery_images created successfully<br>";
// } else {
//     echo "Error creating gallery_images table: <br>" . $conn->error;
// }

// sql to create table for galleryImages
$sql = "CREATE TABLE IF NOT EXISTS Portfolio(
    ImageId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(70) NOT NULL UNIQUE,
    Id_of_Image INT NOT NULL 
)";

if ($conn->query($sql) === TRUE) {
    // echo "Table for user Portfolio created successfully";
} else {
    echo "Error creating Portfolio table: " . $conn->error;
}


// sql to create table for user enquiry
$sql = "CREATE TABLE IF NOT EXISTS enquiry (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    phone BIGINT(50),
    message VARCHAR(255)
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table for user enquiry created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    //sql to create employee table
    $sql = "CREATE TABLE IF NOT EXISTS employee (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table for employee login  created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    //sql to create company table
    $sql = "CREATE TABLE IF NOT EXISTS company (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    companyname VARCHAR(30) NOT NULL,
    headimage VARCHAR(30) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table for Company created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    
    //sql to create images table
    $sql = "CREATE TABLE IF NOT EXISTS images (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    images VARCHAR(30) NOT NULL,
    companyid INT(6) UNSIGNED,
    FOREIGN KEY (companyid) REFERENCES company(id)
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table for images created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }



?>