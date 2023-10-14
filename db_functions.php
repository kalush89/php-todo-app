<?php 
include_once("connection.php");

//Create database
$sql = "CREATE DATABASE TodoApp";
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . $conn->error;
    }
    $conn->close();

// sql to create table
function create_table($tablename, $columns, $conn){
    $sql = "CREATE TABLE $tablename (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        $columns[0] VARCHAR(30) NOT NULL,
        $columns[1] VARCHAR(30) NOT NULL,
        $columns[2] TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
        if ($conn->query($sql) === TRUE) {
          echo "Table created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
        $conn->close();
}

function add_item($columns, $items, $conn){
    $sql = "INSERT INTO Todos ($columns[0], $columns[1], $columns[2]) VALUES ($items[0], $items[1], $items[2])";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
}





?>