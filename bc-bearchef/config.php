<?php

$servername = 'localhost';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Database name
$dbname = 'databaseTeste2';

// Check if the database exists
if (!mysqli_select_db($conn, $dbname)) {
    // If the database doesn't exist, create it
    $createDbQuery = "CREATE DATABASE $dbname";
    
    if ($conn->query($createDbQuery) === TRUE) {
        echo "Database created successfully\n";
    } else {
        echo "Error creating database: " . $conn->error . "\n";
    }
}
// Close the connection
$conn->close();

// Create a new connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Table name

// Select the database
mysqli_select_db($conn, $dbname);

// Check if the table exists
$tableName = 'user_form';
$tableExistsQuery = "SELECT * FROM `$tableName`"; // Use backticks around table name
$tableExists = mysqli_query($conn, $tableExistsQuery);

if (!$tableExists) {
    // If the table doesn't exist, create it
    $createTableQuery = "CREATE TABLE $tableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        lastName VARCHAR(30),
        email VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL,
        user_type VARCHAR(50) NOT NULL,
        address VARCHAR(220),
        phone VARCHAR(50)
    )";

    if ($conn->query($createTableQuery) === TRUE) {
        echo "Table $tableName created successfully\n";
    } else {
        echo "Error creating table: " . $conn->error . "\n";
    }
}


?>