<?php
  include_once "connection.php";

  $paymentName=$_POST['paymentName'];
  $paymentAmount=$_POST['paymentAmount'];
  $paymentDate= date("Y-m-d");

 $sql = "INSERT INTO payment_information(payment_name,payment_amount,payment_date)
 VALUES ('$paymentName', '$paymentAmount','$paymentDate')";
 if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);
header('Location:updatePayment.php');
 ?>
