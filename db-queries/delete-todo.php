<?php
function deleteTodoById()
{
  global $conn; 
  
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
      
    $id = $_GET['delete'];
     /* sql query*/
    $query  = "DELETE FROM todos WHERE id =$id";

    $result = query_db($query, $conn);

    if ($result) {
        $data['success'] = "Todo deleted successfully";
      }
    /*sql query*/
      
    return $data;
    }
}

?>