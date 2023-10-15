<?php 
include_once("db_connection.php");
global $conn;
//Create database
function create_db( $sql, $conn ){
    $result = $conn->query($sql);
    if ($result === FALSE) {
      echo "Error creating database: " . $conn->error;
      return $result;
    } else {
      echo "Database created successfully";
      return $result;
    }
    $conn->close();
}

// sql to create table
function create_table($sql, $conn){
    $result = $conn->query($sql);
    if ($result === FALSE) {
      echo "Error creating table: " . $conn->error;
      return $result;
    } else {
      echo "Table created successfully";
      return $result;
    }
    $conn->close();
}

// sql add item
function add_item($sql, $conn){
    $result = $conn->query($sql);
    if ($result === FALSE) {
      echo "Error: " . $sql . "<br>" . $conn->error;
      return $result;
    } else {
      echo "New record created successfully";
      return $result;
    }
    $conn->close();
}

// sql get all item
function get_all($sql, $conn){
  $result = $conn->query($sql);
  if ($result === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return $result;
  } else {
    echo "Records retreived successfully";
    return $result;
  }
  $conn->close();
}

// / sql get all item
// function get_all($sql, $conn){
//   $result = $conn->query($sql);
//   if ($result === FALSE) {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//     return $result;
//   } else {
//     echo "Records retreived successfully";
//     return $result;
//   }
//   $conn->close();
// }





?>