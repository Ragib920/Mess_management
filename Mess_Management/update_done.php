<?php
session_start();
$ID=$_SESSION['ID'];
if (isset($_POST['submit'])) {

  include_once "connection.php";

$m_name=$_POST['name'];
$phone=$_POST['phone'];
$gmail=$_POST['gmail'];
$address=$_POST['address'];


$name = $_FILES['file']['name'];

$tmp_name =  $_FILES['file']['tmp_name'];
$location = "uploads/";
$uniquename=time()."-".rand(1000, 9999)."-".$name;
echo $uniquename;
$new_name = $location.$uniquename;
if (move_uploaded_file($tmp_name, $new_name)){
          echo "uploaded";
}
else{
  sleep(rand(1,1));
  $new_name = $location.time()."-".rand(1000, 9999)."-".$name;
  if (move_uploaded_file($tmp_name, $new_name)){
          echo "uploaded";
  }
  else{
    $uniquename='';
          echo"failed, better luck next time";
  }
}
$sql = "UPDATE member_info SET file_name = '$uniquename' WHERE ID = '$ID' ";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





 $sql = "UPDATE member_info SET name = '$m_name', phone= '$phone',gmail='$gmail',address='$address' WHERE ID = '$ID'";
echo $sql;
 if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);


}
header('Location:memberDetails.php');
 ?>
