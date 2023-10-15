<?php

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

      $result = query_db($query, $conn);

      if ($result) {
        $data['success'] = "Todo is added successfully";
      }
    }

     return $data;

   }
 
}
