<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wad_project";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Create database
$sql = "CREATE DATABASE ". $dbname;
$conn->query($sql);

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
user_name VARCHAR(30) NOT NULL,
user_email VARCHAR(30) NOT NULL,
user_password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";
$conn->query($sql);




$conn->close();
?>