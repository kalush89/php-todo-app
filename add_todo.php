<?php
include_once("db_functions.php");


function createTodo()
{
  global $conn;  

  if (isset($_POST['add'])) {
      /* validation */
    $title = $_POST['title'];
    $details = $_POST['details'];
    $data['titleMsg'] = '';
    $data['detailsMsg'] = '';
    if(empty($title)) {
        $data['titleMsg'] = "Empty Todo Title Field!";
    }elseif(empty($details)) {
      $data['detailsMsg'] = "Empty Todo Details Field!";
    }else{

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
