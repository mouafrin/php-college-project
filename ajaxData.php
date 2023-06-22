<?php 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["district_id"])){ 
    
    $query = "SELECT * FROM thanas WHERE district_id = ".$_POST['district_id']." AND status = 1 ORDER BY name ASC"; 
    $result = $db->query($query); 
     
    
    if($result->num_rows > 0){ 
        echo '<option value="">Select thana</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Thana not available</option>'; 
    } 
}
?>
