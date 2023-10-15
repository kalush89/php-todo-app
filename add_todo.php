<?php
include_once("db_functions.php");


function createTodo()
{
  global $conn;  

  if (isset($_POST['add'])) {
      /* validation */
    $title = $_POST['title'];
    $data['titleMsg'] = '';
    if(empty($title)) {
        $data['titleMsg'] = "Empty Todo Title Field!";
    }

    $details = $_POST['details'];
    $data['detailsMsg'] = '';
    if(empty($details)) {
        $data['detailsMsg'] = "Empty Todo Details Field!";
    }

     $validation = false;
     echo $details;
     echo $title;
    if(empty($data['detailsMsg']) || empty($data['titleMsg'])) {
       $validation = true;
    }

    if ($validation) {

      /* insert query*/
      $query  = "INSERT INTO todos";
      $query .= "(title, details) ";
      $query .= "VALUES ('$title', '$details')";

      $result = add_item($query, $conn);

      if ($result) {
        $data['success'] = "Todo is added successfully";
      }
    }

     return $data;

   }
 
}
?>