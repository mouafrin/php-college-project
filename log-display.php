<?php 
 include 'dbconfig.php';
 $query= "select *from student_apps";
 $result= mysqli_query($db,$query);

//  session //
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']=!true){
    header("location:login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js" integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
   <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>view page - <?php $_SESSION['username']?></title>
</head>
<style>
    .container{
        margin-left: 50px;
        margin-top: 11%;
    }

    
    
</style>

   
<body>

<?php include 'header.php'; ?>

<div class="container">
    

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome  <?php echo $_SESSION['username']?>!</h4>
  <p>you're successfully logged in this page.
 

</div>

<table id="data-table" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
                 <th>id</th>
                <th>name</th>
                <th>gender</th>
                <th>email</th>
                <th>view</th>
              



                 </tr>
        </thead>
        <tbody>
            <tr>
            <?php
      while($row= mysqli_fetch_assoc($result)){
        $id= $row['id'];
       ?>
     
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['gender'];?></td>
      <td><?php echo $row['email'];?></td>
      <td> <a href='view.php?id=<?php echo $id;?>'><button type="button" class="btn btn-info">view</button></a></td>

     
    </tr>
    <?php
      }
    
    ?>
   
            
</tbody>
</table>
</div>

    </div>
    <script>
$(document).ready(function() {
    $('#data-table').DataTable();
});
</script>
  
    
</body>
</html>