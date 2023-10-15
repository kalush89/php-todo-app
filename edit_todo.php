<?php

/* edit data */
function editTodo(){

  global $conn;
    $data=[];
  if(isset($_GET['edit']) && !empty($_GET['edit']) ) {
     
    $id = $_GET['edit'];
    $msg = [];

     /* sql query*/
  $query = "SELECT todo ";
  $query .= "FROM todos ";
  $query .= "WHERE id=$id"; 

    $result = $conn->query($query);
    $data = $result->fetch_assoc();

 }
 return $data; 

}  

?>