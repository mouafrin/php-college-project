<?php 
$login =false;
$showError = false;
 include 'dbconfig.php';
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["username"];
  $password=$_POST["password"];
 
//     echo "<pre>";
// print_r($_POST);
// echo "</pre>";
  $exists=false;
 
    // $sql = "select *from signup where username='$username' AND password ='$password'";
    $sql = "select *from signup where username='$username'";

    $result= mysqli_query($db,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
       while($row=mysqli_fetch_assoc($result)){
        if(password_verify($password,$row['password'])){
          $login = true;
            
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header("location:log-display.php");

        }
        else{
          $showError = "Invalid Username or Password.";
        }
      
       }
     }

 
  else{
    $showError = "Invalid Username or Password.";
  }

  
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>login</title>
  </head>
  <style>
   form>.form-group{
       margin-left: 23%;
   }
   .alert{
    margin-top: 55px;
   }
   .container{
     margin-top: 50px;
    }
  </style>
  <body>
  <?php include 'header.php'; ?>
<div class="alert">
    <?php
    if( $login){
    
   
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }

    if($showError){
    
   
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showError.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
      }
    ?>
    </div>
    <div class="container">
        <h4 class="text-center">login to our website</h4>
        <form action="login.php" method="post">
  <div class="form-group  col-md-6">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="uname" name="username">
   
  </div>
  
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  
  <div class="form-group  col-md-6">
   <div class="submit">
  <button type="submit" class="btn btn-primary btn-lg btn-block">login</button>
  </div>
  </div>
  <div class="form-group  col-md-6">
  <span class="text">Didn't  have an account? 
    <a href="reg.php" class="tlogin">signup Now</a></span>
  </div>
 </form>
 </div>
 
 
 
  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   
   

   
  </body>
</html>