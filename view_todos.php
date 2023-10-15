<?php
include('get_all_todos.php');
$getTodos = getTodos(); 
?>

<?php
if(count($getTodos['data'])) {
foreach($getTodos['data'] as $todo) {
?>

<div class="row my-3">
    <div class="col-sm-10">
        <?php
       echo $todo['title'];
        ?>
    </div>
    <div class="col-sm-10">
        <?php
       echo $todo['details'];
        ?>
    </div>
    <div class="col-sm-1">
        <a href="index.php?edit-task=<?php echo $todo['id']; ?>" class="text-success text-decoration-none">
        <i class='fas fa-edit'></i>
       </a>
    </div>
    <div class="col-sm-1">
    <a href="index.php?delete-task=<?php echo $todo['id']; ?>" class="text-danger text-decoration-none">
    <i class='fas fa-trash-alt'></i>

    </a>
    </div>
</div>
<hr>

<?php 
} 
}
?>