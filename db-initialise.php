<?php 
global $conn;

    $query = "CREATE DATABASE IF NOT EXISTS tododb";
    query_db( $query, $conn );

    $query = "CREATE TABLE IF NOT EXISTS todos (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        details VARCHAR(255) NOT NULL,
        add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    query_db($query, $conn);
?>