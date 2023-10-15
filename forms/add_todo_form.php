<?php  
include_once('./db_functions.php');
include_once("./db_initialise.php");
include("./add_todo.php");
$createTask = createTodo();
?>
<form method="post">    
    <p class="text-danger">
        <?php 
         echo $createTask['success']??'';
         //echo $createTask['taskMsg']??''; 
         ?>
    </p>
 
    <div class="">
      <input type="text" class="form-control" placeholder="Enter Something..." name="title" value="">
      <textarea name="details" rows="4" cols="50"></textarea>
      <button type="submit" class="" name="add">Add</button>
    </div>
  </form>