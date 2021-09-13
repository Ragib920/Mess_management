<?php
  include_once "connection.php";

  $costName=$_POST['costName'];
  $amount=$_POST['costAmount'];
  $costDate= date("Y-m-d");


 $sql = "INSERT INTO cost_information (Cost_name,amount,cost_date)
 VALUES ('$costName', '$amount','$costDate')";
 if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);
header('Location:updateCost.php');
 ?>
