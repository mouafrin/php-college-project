
<?php
include 'dbconfig.php';

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$district = $_POST['district'];
$thana = $_POST['thana'];
$profile_pic = $_POST['profile_pic'];
$fathers_name = $_POST['fathers_name'];
$mobile = $_POST['mobile'];
$date_of_birth = $_POST['date_of_birth'];
$signature = $_POST['signature'];


$sql = "UPDATE `student_apps` SET `name`='$name', `date_of_birth`='$date_of_birth', `fathers_name`='$fathers_name', `gender`='$gender', `mobile`='$mobile', `address`='$address', `profile_pic`='$profile_pic', `district`='$district', `thana`='$thana', `signature`='$signature', `email`='$email' WHERE id=$id";

$update_personal_info = mysqli_query($db, $sql);
if (!$update_personal_info) {
    echo "Error updating personal information: " . mysqli_error($db);
    exit;
}


$edu_data = $_POST['educational_info'];

foreach ($edu_data as $index => $edu_row) {
   
    $institution_name = $edu_row['institution_name'];
    $degree = $edu_row['degree'];
    $passing_year = $edu_row['passing_year'];
    $result = $edu_row['result'];

    $sql = "UPDATE `list_of_educational_info` SET `institution_name`='$institution_name',  `degree`='$degree', `passing_year`='$passing_year',`result`='$result' WHERE app_id=$id";

    $update_educational_info = mysqli_query($db, $sql);
    if (!$update_educational_info) {
        echo "Error updating educational information: " . mysqli_error($db);
        exit;
    }
}

header("Location: display.php");
?>
