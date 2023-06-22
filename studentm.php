<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>student form</title>
   </head>
    <body>
 
   <style>
    .nav-item>a{
     color: burlywood;
   }
    /* body{
      margin: 0;
      padding: 0;
      position: relative;
    } */
   
      form{
     
      position: absolute;
      width: 90%;
      margin-left:-163px;
      padding:0 0 20px 40px;
      
      }
    
    .form-row{
      margin-top: 20px;
    }
    .form-row>.form-group{
      margin-left: 30px;
    }
   

   </style>
   
  <header>
        
    <nav class="navbar navbar-expand-sm fixed-top" style="background-color: rgb(12, 2, 26);">
        <a class="navbar-brand" href="#">
            <img src="./mou.jpg" alt=""> <p style="margin-left: 35%; margin-top: -20%; font-size: 30px; font-style: oblique; color: burlywood;"> Adamjee Cantonment College</p><br>
           
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto" >
            <li class="nav-item active">
              <a class="nav-link" href="home.php" target ="_blank ">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Gallery
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="photo.php" target ="_blank ">Photo</a>
                 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Student
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="studentm.php" target ="_blank ">Add student</a>
                 
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php" target ="_blank ">Contact</a>
            </li>
           
            
          </ul>
        </div>
      </nav>

</header>

             <!-- student form -->
            
             <section>
              <form>
             <div class="step1">
                  <div class="form-row1">
                    <div class="form-group col-md-10">
                        <h5 style=" background-color:rgb(127 169 162); padding-top: 20px;padding-bottom: 20px; width: 124.2%; margin-left: -15px; color: white;padding-left: 20px;"> Personal Information</h5>

                    </div>
                  </div>
                
                     
                      <div class="form-row">
                        <div class="form-group col-md-5">
                      <label for="inputnamel4">Name :</label>
                      <input type="text" class="form-control" id="inputname4">
                    </div>
                      <div class="form-group col-md-5">
                        <label for="inputbd4">Date of Birth : </label>
                        <input type="date" class="form-control" id="inputbd4">
                      </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-5">
                      <label for="inputfnamel4">Father's Name :</label>
                      <input type="text" class="form-control" id="inputname4">
                    </div>
                      <div class="form-group col-md-5">
                        <label for="inputocc4">father's Occupation : </label>
                        <input type="text" class="form-control" id="inputocc4">
                      </div>
                      </div>
                    
                    <div class="form-row"> 
                    <div class="form-group col-md-5">
                      <div class="form-check form-check-inline"  style="margin-top: 30px;">
                        
                        <label class="form-check-label" for="gender1">Gender :</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">female</label>
                      </div>
                    </div>
                    <div class="form-group col-md-5">
                      <label for="mobile_code">Mobile</label>
                      <input type="number" class="form-control" id="phone" type="tel" name="phone">                 
                     </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                       <label for="exampleFormControlTextarea1">Address</label>
                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                         </div>

                    <!-- <div class="form-row"> 
                      <div class="form-group col-md-5">
                        <label for="exampleFormControlFile1" >Profile picture :</label>
                         <input type="file" id="exampleFormControlFile1" class="form-control-file"onchange="previewFile(this);" required>
                         <img id="previewImg" style="height:
                         50px"; width="130px" src="/examples/images/transparent.png">
                          
                        </div> -->
                        <div class="form-group col-md-5">
                          <label for="inputemail4">Email :</label>
                          <input type="email" class="form-control" id="inputemail4">

                        </div>
                       </div>
                      
                                 <?php 
                
                                   include_once 'dbConfig.php'; 
     
                           $query = "SELECT * FROM districts WHERE status = 1 ORDER BY district_name ASC"; 
                         $result = $db->query($query); 
                         ?>

                       <div class="form-row">
                        
                        <div class="form-group col-md-5">
                          <label for="exampleFormControlSelect1">District :</label>
                          <select class="form-control" id="district">
                            <option>Select</option>
                               <?php 
                                     if($result->num_rows > 0){ 
                                     while($row = $result->fetch_assoc()){  
                                    echo '<option value="'.$row['district_id'].'">'.$row['district_name'].'</option>'; 
                                                      } 
                                                            }else{ 
                                         echo '<option value="">district not available</option>'; 
                                          } 
                                       ?>    
                            </select> 
                          </div>
                        
                          <div class="form-group col-md-5">
                            <label for="inputthana4">Thana :</label>
                            <select class="form-control" id="thana">
                            <option value="">select district first</option>
                            </select>
                          </div>
                          </div>
                          <div class="form-row"> 
                        <div class="form-group col-md-5">
                        <label for="exampleFormControlFile1" >Profile picture :</label>
                         <input type="file" id="exampleFormControlFile1" class="form-control-file"onchange="previewFile(this);" required>
                         <img id="previewImg" style="height:150px"; width="150px" src="/examples/images/transparent.png">
                          
                        </div>
                          </div> 
                          </div>
                          
                        

                          
                          <div class="step2">
                        <h5 style=" margin-left:0;  background-color:rgb(127 169 162);">Educational info</h5>
                        <div class="form-row">
                        <table class="table" style="width:130%;" id="tb" >
                          <thead>
                            <tr>
                              <th scope="col">Institution name</th>
                              <th scope="col">Degree</th>
                              <th scope="col">Passing Year</th>
                              <th scope="col">Result</th>
                              <th> <a href="javascript:void(0);" class="btn btn-success btn-sm" id="addMore" title="add more info"><span class="fa fa-plus"  style="margin-left: 5px;"></span> </a></th>

                            </tr>
                          </thead>


                          <tr> 
                         <td class="col-md-4"><input type="text" class="form-control" name="[]"></td>
                            <td class="col-md-4"><input type="text" class="form-control" year="[]"></td>
                            <td class="col-md-3"><input type="text" class="form-control" degree="[]" ></td>
                            <td class="col-md-3"><input type="text" class="form-control" result="[]"></td>
                            <td><a href="javascript:void(0);" class="btn btn-danger btn-sm remove" style="margin-top: 10px;"><span class="fa fa-minus"  style="margin-left:5px;"></span> </a></td>
                           
                           </tr>

                          </table>
                          </div>
                        </div>
                       
                            <div class="step3">
                              <h5 style=" margin-left:0; background-color:rgb(127 169 162)";>Declaration</h5>
                             
                              <div class="form-group row" style="margin-left: 30px;">
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
                                <div class="form-row" >
                                  <button type="submit" class="btn btn-success" style="color: white; margin-left: 85%; margin-bottom: 20px;">Submit</button></div>
                              </div>
                           
                           </form>
                        </section>

                        <!-- <footer>
                          <p>Copyright<br>
                          <a href="mailto:ACC@example.com">ACC@example.com</a></p>
                        </footer> -->
                         

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
              
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
   

     <script>

      $(function(){
        $('#addMore').on('click', function(){
          var data =$ ("#tb tr:eq(1)").clone(true).appendTo("#tb");
          data.find("input").val('');
         
           $('#tb tr').find('.remove').show(); 
           $('#tb tr:eq(1)').find('.remove').hide();

        });
        $(document).on('click', '.remove', function(){
          var trIndex = $(this).closest("tr").index();
           
            $(this).closest("tr").remove();
          
         
           });
          
      });
      
      
    </script>
     <script>
             const phoneInputField = document.querySelector("#phone");
              const phoneInput = window.intlTelInput(phoneInputField, {
              initialCountry: "bd",
              // autoPlaceholder:"polite",

	           separateDialCode: true,

                utilsScript:
               "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
                });

       </script>

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
          $("#previewImg").resizable();
           </script>

<script>
$(document).ready(function() {
    $('#district').on('change', function() {
        var districtID = $(this).val();
        if (districtID) {
            $.ajax({
                type: 'POST',
                url: 'ajaxData.php',
                data: 'district_id=' + districtID, // Corrected data format
                success: function(html) {
                    console.log('not working');
                    $('#thana').html(html);
                }
            });
        } else {
            $('#thana').html('<option value="">Select district first</option>');
        }
    });
});
</script>

    
  </body>
</html>