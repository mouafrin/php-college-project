<?php 
                
     include_once 'dbConfig.php'; 

     $query = "SELECT * FROM districts WHERE status = 1 ORDER BY name ASC"; 
      $result = $db->query($query); 
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> -->
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script> 
  <link rel="stylesheet" href="jquery-steps.css">
 
  <title>view page</title>
</head>
<style>
   #example-form{
    border:1px solid black;
  }
  .error {color: #FF0000;}
</style>
<body>
<?php include 'header.php'; ?>
<?php
  $id = $_GET['id'];
  //   echo $id;
  
  $sql= "SELECT * FROM `student_apps` WHERE id=$id";
  $result= mysqli_query($db,$sql);
  $row= mysqli_fetch_assoc($result);
  // print_r($row);
  $name =  $row['name'];
  $email = $row['email'];
  $gender = $row['gender'];
  $fathers_name = $row['fathers_name'];
  $mobile = $row['mobile'];
  $date_of_birth = $row['date_of_birth'];
  $address = $row['address'];
  $district = $row['district'];
  $thana = $row['thana'];
  $profile_pic = $row['profile_pic'];

?>
<div class="container">
  <div class="panel">
    <div class="panel-body wizard-content">
      <form id="example-form" action="insert.php" method="post" class="tab-wizard wizard-circle wizard clearfix">
    <h6>Basic Information</h6>
    <section>
      <br/>
      <div class="step1">
                  <div class="form-row">
                    <div class="form-group-row" style="width:90%;">
                        <h5 style=" background-color:rgb(127 169 162); padding-top: 20px;padding-bottom: 20px; padding-left: 33px;width: 124.2%; margin-left: -25px; margin-right:15px; color: white;"> Personal Information</h5>

                    </div>
                  </div>
                
                      <div class="form-row">
                        <div class="form-group col-md-5">
                       
                      <label for="inputnamel4">Name :</label>
                      <input type="text" class="form-control" id="names" name="name" disabled value="<?php echo $name;?>">
                     
                    </div>
                    
                      <div class="form-group col-md-5">
                        <label for="inputbd4">Date of Birth : </label>
                        <input type="date" class="form-control" id="dob" name="date_of_birth" disabled value="<?php echo $date_of_birth;?>">
                       
                      </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-5">
                      <label for="inputfnamel4">Fathers Name :</label>
                      <input type="text" class="form-control" id="fname" name="fathers_name" disabled value="<?php echo $fathers_name;?>">
                  
                    </div>
                      <div class="form-group col-md-5">
                        <label for="inputocc4">Father's Occupation : </label>
                        <input type="text" class="form-control" id="inputocc4" name="fathers_occupation">
                      </div>
                      </div>
                    
                    <div class="form-row"> 
                    <div class="form-group col-md-5">
                      <div class="form-check form-check-inline"  style="margin-top: 30px;">
                      
                        
                        <label class="form-check-label" for="gender1">Gender :</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="radio" value="Male" name="gender" value="<?php echo $gender;?>">
                        <label class="form-check-label" for="inlineRadio1">male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  id="radio" value="Female" name="gender" value="<?php echo $gender;?>">
                        <label class="form-check-label" for="inlineRadio2">female</label>
                      
                      </div>
                      
                      
                    </div>
                    <div class="form-group col-md-5">
                  <label for="mobile_code">Mobile :</label> <br>
                  <input type="number" class="form-control" id="phone" name="mobile"style="width:437px;" disabled value="<?php echo $mobile;?>">
                     
                                    
                     </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                       <label for="exampleFormControlTextarea1">Address :</label>
                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="address" disabled value="<?php echo $address;?>"></textarea>
                         </div>

                        <div class="form-group col-md-5">
                       
                          <label for="inputemail4">Email : </label>
                          <input type="email" class="form-control" id="email" name="email" disabled value="<?php echo $email;?>">
                        
                        </div>
                       
                       </div>

                       <div class="form-row">
                        
                        <div class="form-group col-md-5">
                          <label for="exampleFormControlSelect1">District :</label>
                          <select class="form-control" id="district" name="district" disabled value="<?php echo $district;?>">
                            <option>Select</option>
                               <?php 
                                     if($result->num_rows > 0){ 
                                     while($row = $result->fetch_assoc()){  
                                    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>'; 
                                                      } 
                                                            }else{ 
                                         echo '<option value="">district not available</option>'; 
                                          } 
                                       ?>    
                            </select> 
                          </div>
                        
                          <div class="form-group col-md-5">
                            <label for="inputthana4">Thana :</label>
                            <select class="form-control" id="thana" name="thana" disabled value="<?php echo $thana;?>">
                            <option value="">select district first</option>
                          
                            </select>
                          </div>
                          </div>
                          <div class="form-row"> 
                        <div class="form-group col-md-5">
                        <label for="exampleFormControlFile1" >Profile picture :</label>
                         <input type="file" id="exampleFormControlFile1" name="profile_pic" disabled value="<?php echo $profile_pic;?>" class="form-control-file"onchange="previewFile(this);">
                         <img id="previewImg" style="height:150px"; width="150px" > 
                          
                        </div>
                          </div> 
                          </div>
                          </section>
                          <!-- src="/examples/images/transparent.png" -->
 
                <h6>Educational Information</h6>
               <section>
                 <div class="step2">
                        <h5 style=" margin-left:-20px; width:104%; background-color:rgb(127 169 162);">Educational info</h5>
                        <div class="form-row">
                        <table class="table" style="width:130%;" id="tb" >
                          <thead>
                            <tr id="row0">
                              <th scope="col">Institution name</th>
                              <th scope="col">Degree</th>
                              <th scope="col">Passing Year</th>
                              <th scope="col">Result</th>
                              <th scope="col">Action</th>

                            </tr>
                          </thead>
                          <tbody id="test-body">


                          <tr id="row0"> 
                            <td class="col-md-4"><input type="text" class="form-control" name="iname[]"></td>
                            <td class="col-md-4"><input type="text" class="form-control" name="year[]"></td>
                            <td class="col-md-3"><input type="text" class="form-control" name="degree[]" ></td>
                            <td class="col-md-3"><input type="text" class="form-control" name="result[]"></td>
                           
                            <td>
                            <span id="add-row" class="btn btn-primary btn-sm fa fa-plus "></span>
                            </td>
                           </tr>
                           </tbody>

                          </table>
                          </div>
                        </div>
                      </section>
 
    
 
                <h6>Declaration</h6>
                   <section>
                    <div class="step3">
                              <h5 style=" margin-left: -20px; width:105%; background-color:rgb(127 169 162)";>Declaration</h5>
                             
                              <div class="form-group row" style="margin-left: 40px;">
                                <label for="inputsig3" class="col-form-label">Signature :</label>
                                <div class="col-md-5">
                                 <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                  <label class="form-check-label" for="defaultCheck1">
                                    I do here by declare that the information given avobe is true.
                                  </label>
                                </div>
                                <input class="btn btn-success" type="submit" value="Submit">
                                </section>
                               </form>
                       
                          </div>
                             </div>
                            </div>
          <!--form validation start -->

          <script>
  $(document).ready(function() {
    $.validator.addMethod("bdPhoneNumber", function(value, element) {
        return this.optional(element) || /^(?:\+?88|01)?\d{11}$/.test(value);
      }, "Please enter a valid Bangladeshi phone number");

    
    $("#example-form").validate({
      
      rules: {
        name: {
          required: true,
          minlength:3
          
        },
        date_of_birth: {
          required: true,
          
        },
        fathersName: {
          required: true,
          minlength:3
         
        },
        gender: {
          required: true,
          
        },
        mobile: {
          required: true,
          bdPhoneNumber: true
        },
        email: {
          required: true,
          email: true,
          
        },
      },
      
      messages: {
        name: {
          required: "**Please enter your name",
          minlength: "**Name should be at least 3 characters"
         
        },
        date_of_birth: {
          required: "**Please enter your date of birth",
          
        },
        fathersName: {
          required: "Please enter your father's name",
          minlength: "**Name should be at least 3 characters"
          
        },
        gender: {
          required: "Please select your gender",
          
        },
        mobile: {
          required: "Please enter your mobile number",
          pattern: "Please enter a valid Bangladeshi phone number"
          
        },
        email: {
          required: "**Please enter your email address",
          email: "**Please enter a valid email address",
        
        },
      },
    });
  });
</script>

         

    <!--form validation end -->




       <!-- mbl dropdown start -->
        <script>
             const phoneInputField = document.querySelector("#phone");
              const phoneInput = window.intlTelInput(phoneInputField, {
              initialCountry: "bd",
               autoPlaceholder:"",

	           separateDialCode: true,

                //  utilsScript:
                // "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
                });
           
       </script>


        <script>
          $(document).ready(function() {
            var form = $("#example-form");

            form.steps({
              headerTag: "h6",
              bodyTag: "section",
              transitionEffect: "fade",
              titleTemplate: '<span class="step">#index#</span> #title#',
              onStepChanging: function(event, currentIndex, newIndex) {
                // Validate the current step before proceeding to the next one
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
                
              }
            });

            // Enable jQuery Validation Plugin on the form
            form.validate({
              errorPlacement: function errorPlacement(error, element) {
                element.before(error);
              },
              rules: {
                // Define your validation rules here
                // For example:
                exampleField: {
                  required: true,
                  minlength: 5
                }
              },
              messages: {
                // Define your error messages here
                // For example:
                exampleField: {
                  required: "This field is required",
                  minlength: "Please enter at least 5 characters"
                }
              }
            });
          });
        </script>
      <!-- step-js- end -->
        

            <!-- add row start -->
           <script>
           var row=1;
           $(document).on("click", "#add-row", function(){

           var new_row ='<tr id= "row' + row + '">' +
                      '<td class="col-md-4"><input name="iname[]'+row+'"type="text" class="form-control"></td>' +
                            '<td class="col-md-4"><input name="year[]'+row+'"type="text" class="form-control"></td>'+
                            '<td class="col-md-4"><input name="degree[]'+row+'"type="text" class="form-control"></td>'+
                            '<td class="col-md-4"><input name="result[]'+row+'"type="text" class="form-control"></td>'+
                           '<td>' +
                            '<span class="btn btn-primary btn-sm fa fa-minus delete-row"></span>'+
                            '</td>'+
                           '</tr>';
                      $('#test-body').append(new_row);
                      row++;
                      return false;
  
 });
  $(document).on("click", ".delete-row", function(){

    if(row>1){
      $(this).closest('tr').remove();
      row--;
    }
    return false;
  });

 </script>  
            <!-- add row end -->
  

      <!-- image preview start -->
    <script>
   function previewFile(input){
  var file = $("input[type=file]").get(0).files[0];

    if(file){
    var reader = new FileReader();

       reader.onload = function(){
        $("#previewImg").attr("src", reader.result);
    }

    reader.readAsDataURL(file);
     }
   }
     
    //  $("#previewImg").resizable();
     </script>

      <!-- image preview end -->

     <!-- district thana load start -->
      <script>
         $(document).ready(function() {
        $('#district').on('change', function() {
        var ID = $(this).val();
         if (ID) {
         

      
         $.ajax({
          type: 'POST',
          url: 'ajaxData.php',
          data: 'district_id='+ ID, // Corrected data format
          success: function(html) {
            $('#thana').html(html);
                    
                }
            }); 
        }else{
            
            $('#thana').html('<option value="">Select district first</option>'); 
        }
    });
  });
    
</script>
     <!-- district thana load end -->


  
</body>
</html>