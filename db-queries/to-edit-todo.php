<?php
/* edit data */
function editTodo(){

  global $conn;
    $data=[];
    
  if(isset($_GET['edit']) && !empty($_GET['edit']) ) {
    $id = $_GET['edit'];

     /* sql query*/
  $query = "SELECT title, details ";
  $query .= "FROM todos ";
  $query .= "WHERE id=$id"; 

    $result = query_db($query, $conn);
    $data = $result->fetch_assoc();

 }
 return $data; 

}  

?>