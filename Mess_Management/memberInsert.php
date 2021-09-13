<?php
  include_once "connection.php";

  $m_name=$_POST['name'];
  $phone=$_POST['phone'];
  $gmail=$_POST['gmail'];
  $address=$_POST['address'];
  $join_date= date("Y-m-d");



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




 $sql = "INSERT INTO member_info (name, phone, gmail, address,file_name,join_date)
 VALUES ('$m_name', '$phone', '$gmail','$address','$uniquename','$join_date')";
 if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);
header('Location:registerMember.php');
 ?>
