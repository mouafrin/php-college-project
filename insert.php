<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
<?php 
   // Database configuration 
  $servername = "localhost"; 
  $Username = "root"; 
  $Password = ""; 
  $dbName   = "student_form"; 
 
   $conn = mysqli_connect("localhost", "root", "", "student_form"); 
 
    if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
  }

  if(!empty($_FILES["signature"]["name"])) { 
    // Get file info 
    $fileName = basename($_FILES["profile_pic"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
     
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes)){ 
        $image = $_FILES['profile_pic']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($profile_pic)); 
    }
}
if(!empty($_FILES["image"]["name"])) { 
    // Get file info 
    $fileName = basename($_FILES["signature"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
     
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes)){ 
        $image = $_FILES['signature']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($signature)); 
       
    }
}
    //  personal information
     

        $name = $_REQUEST['name'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $district = $_REQUEST['district'];
        $thana = $_REQUEST['thana'];
        $profile_pic = $_REQUEST['profile_pic'];
        $fathers_name = $_REQUEST['fathers_name'];
        $fathers_occupation = $_REQUEST['fathers_occupation'];
        $mobile = $_REQUEST['mobile'];
        $date_of_birth = $_REQUEST['date_of_birth'];
        $signature = $_REQUEST['signature'];
       $accept_terms = $_REQUEST['accept_terms'];

          
       $sql = "INSERT INTO student_apps (name, address, email, gender,district,thana,mobile,date_of_birth,  fathers_name,fathers_occupation,profile_pic,accept_terms,signature)  VALUES ('$name','$address','$email','$gender','$district','$thana','$mobile','$date_of_birth', '$fathers_name','$fathers_occupation','$profile_pic','$accept_terms','$signature')";

    

    if(mysqli_query($conn,$sql)){
      header('location:display.php');
    } else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    $last_id = mysqli_insert_id($conn);
 


    $institution_name = $_REQUEST['institution_name'];
    $degree = $_REQUEST['degree'];
    $passing_year = $_REQUEST['year'];
    $result = $_REQUEST['result'];
    $app_id = $last_id;
   
 

    for($i=0; $i<count($institution_name); $i++){

    if($institution_name[$i]!="" && $passing_year[$i]!="" && $degree[$i]!="" && $result[$i]!="")
    {
     $sql=("INSERT INTO list_of_educational_info (institution_name,passing_year,degree, result, app_id) VALUES ('$institution_name[$i]','$passing_year[$i]','$degree[$i]','$result[$i]', '$app_id')");

     if(mysqli_query($conn, $sql)){
        
        $last_id = mysqli_insert_id($conn);
        echo "Records inserted successfully. Last inserted ID is: " . $last_id;
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    
     
    }
}
  
       mysqli_close($conn);

       ?>
    
       
            
   </body>
   </html>