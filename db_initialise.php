<?php 
include_once("db_functions.php");
global $conn;

    $query = "CREATE DATABASE IF NOT EXISTS tododb";
    create_db( $query, $conn );

    $query = "CREATE TABLE IF NOT EXISTS todos (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        details VARCHAR(255) NOT NULL,
        add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    create_table($query, $conn);
?>