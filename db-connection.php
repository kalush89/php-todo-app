<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "tododb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   
    //query the database
    function query_db( $sql, $conn ){
        $result = $conn->query($sql);
        if ($result === FALSE) {
          return $result;
        } else {
          return $result;
        }
        $conn->close();
    }

?>