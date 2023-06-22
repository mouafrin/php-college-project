
<?php
     $id = $_GET['id'];
    include 'dbConfig.php'; 
     $sql = "DELETE FROM `student_apps` WHERE id=$id";

     $delete = mysqli_query($db,$sql);
     if($delete){
        header("Location: display.php");
      }
 

 
  ?>