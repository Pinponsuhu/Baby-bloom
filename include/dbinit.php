<?php
$servername = "localhost";
$username = "pinponsuhu";
$password = "Pinponsuhu11";
$db_name = "babybloom";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE  IF NOT EXISTS " . $db_name;
if ($conn->query($sql) === TRUE) {
    $conn = new mysqli($servername, $username, $password, $db_name);
} else {
    echo "Error creating database: " . $conn->error;
}

$tableName = "user";
$shoeTable = "CREATE TABLE IF NOT EXISTS $tableName (
        userID INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email_address VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        is_admin BOOLEAN NOT NULL DEFAULT FALSE
    )";
if ($conn->query($shoeTable) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}

$tableName = "product";

$productTable = "CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($productTable) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}

$tableName = "blog";

$blogTable = "CREATE TABLE blogs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image_path VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($blogTable) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();