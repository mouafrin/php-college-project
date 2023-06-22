<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .nav-item>a{
  color: burlywood;
 }
 .navbar-brand>img{
    width:80px;
}

  </style>
    
  <header>
   
  <?php

  //  session //
 
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin=true;
   
}
else{
     $loggedin= false;

}

 echo '<nav class="navbar navbar-expand-sm fixed-top" style="background-color: rgb(12, 2, 26);">
        <a class="navbar-brand" href="#">
            <img src="./mou.jpg" alt=""> <p style="margin-left: 35%; margin-top: -20%; font-size: 30px; font-style: oblique; color: burlywood;"> Adamjee Cantonment College</p>  <br>
           
        </a>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto" >
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Gallery
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="photo.php">Photo</a>
                 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Student
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="display.php">Student</a>
                 
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>';
            if(!$loggedin){
              echo '<li class="nav-item">
              <a class="nav-link" href="reg.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target ="_blank ">login</a>
            </li>';
            }
            if($loggedin){
  
            echo '<li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>';
}
           
           
            
         echo '</ul>
        </div>
      </nav>';
      ?>

</header>
</body>
</html>