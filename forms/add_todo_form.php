<?php  
include_once('./db_functions.php');
include_once("./db_initialise.php");
include("./add_todo.php");
$createTodo = createTodo();
?>
<form method="post">    
    <p class="text-danger">
        <?php 
         echo $createTodo['success']??'';
         echo $createTodo['titleMsg']??''; 
         echo $createTodo['detailsMsg']??''; 
         ?>
    </p>
 
    <div class="">
      <input type="text" class="form-control" placeholder="Enter Something..." name="title" value="">
      <textarea name="details" rows="4" cols="50"></textarea>
      <button type="submit" class="" name="add">Add</button>
    </div>
  </form>