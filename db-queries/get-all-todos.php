<?php

/* Fetch data */
function getTodos()
{
    global $conn; 
    $data['data'] = [];

  $query  = "SELECT *";
  $query .= "FROM todos ORDER BY id DESC"; 

  $result = query_db($query, $conn);
    
  if ($result) {

    if($result->num_rows> 0) {

      $data['data'] = $result->fetch_all(MYSQLI_ASSOC);

    }

  }
    
    return $data;
  
}

?>