<?php
function updateTodoById()
{
  global $conn; 
  
if (isset($_POST['update']) && isset($_GET['edit']) && !empty($_GET['edit'])) {
      
  $id = $_GET['edit'];

    $title = $_POST['title'];
    $details = $_POST['details'];

    $data['titleMsg'] = '';
    $data['detailsMsg'] = '';

   if(empty($title)) {
      $data['titleMsg'] = "Todo Field is required";
    
    }elseif(empty($details)){
        $data['detailsMsg'] = "Todo detais Field is required";
    }else{
     /* sql query*/
    $query  = "UPDATE todos SET ";
    $query .= "title ='$title', details ='$details' ";
    $query .= "WHERE id =$id";

    $result = update_todo($query, $conn);

    if($result) {

      echo "<script>window.location='index.php'</script>";

    } 
    /*sql query*/
      
    }
    
    return $data;
}

  
}

?>