<?php
session_start();
  include_once "connection.php";


//echo sizeof($_SESSION['meal_name']);
$count_name=sizeof($_SESSION['meal_name']);

for($i=0;$i<$count_name;$i++){
  $name=$_SESSION['meal_name'][$i];
  $meal=$_POST[$name];
//echo $name.':'.$_POST[$name]."<BR>";
$date= date("Y-m-d");

$sql = "INSERT INTO meal_info (m_id,meal,date)
VALUES ('$name','$meal','$date')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




}
mysqli_close($conn);

header('Location:updateMeal.php');

 ?>
