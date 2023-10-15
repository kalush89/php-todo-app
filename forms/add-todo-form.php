<?php  
include_once('./db-connection.php');
include_once("./db-initialise.php");
include("./db-queries/add-todo.php");
include("./db-queries/to-edit-todo.php");
include("./db-queries/update-todo.php");
include("./db-queries/delete-todo.php");

// action messages
$createTodo = createTodo();
$editTodo = editTodo();

if(isset($_GET['edit'])) {
    $createTodo = updateTodoById();  
}
if(isset($_GET['delete'])) {
    $removeTodo =  deleteTodoById();
}

?>
<form method="post">    
    <p class="text-danger">
        <?php 
         echo $createTodo['success']??'';
         echo $createTodo['titleMsg']??''; 
         echo $createTodo['detailsMsg']??''; 
         echo $removeTodo['success']??'';
         ?>
    </p>
 
    <div class="">
      <input type="text" class="form-control" placeholder="Enter Something..." name="title" value="<?php echo $editTodo['title']??''; ?>">
      <textarea name="details" rows="4" cols="50"><?php echo $editTodo['details']??''; ?></textarea>
      <button type="submit" class="" name="<?php echo count($editTodo)?'update':'add'; ?>"><?php echo count($editTodo)?'update':'add'; ?></button>
    </div>
  </form>