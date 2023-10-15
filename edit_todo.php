<?php
include_once("db_functions.php");
/* edit data */
function editTodo(){

  global $conn;
    $data=[];
    
  if(isset($_GET['edit']) && !empty($_GET['edit']) ) {
    echo $_GET['edit'];
    $id = $_GET['edit'];
    $msg = [];

     /* sql query*/
  $query = "SELECT title, details ";
  $query .= "FROM todos ";
  $query .= "WHERE id=$id"; 

    $result = get_all($query, $conn);
    $data = $result->fetch_assoc();

 }
 return $data; 

}  

?>