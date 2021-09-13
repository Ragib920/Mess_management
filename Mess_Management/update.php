<?php
session_start();

if(!isset($_SESSION['loggedin'])){
  header("Location:index.html");
}
 ?>
<?php
session_start();
if(isset($_GET['student_id'])){
  include_once "connection.php";
  $student_id=$_GET['student_id'];
  $_SESSION['s_id']=$student_id;
$sql = "SELECT * FROM info where s_id='$student_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $name=$row['name'];
        $phone=$row['phone'];
      }
} else {
    echo "0 results";
}

}else{
  header ('location:index.php');
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   </head>
   <body>
      <div class="continer">
       <form class="" action="update_done.php"  method="post">
         <label for="">Name:</label>
          <input type="text" name="name"  value="<?php echo $name; ?>"><br>
          <label for="">Phone:</label>
          <input type="number" name="phone" value="<?php echo $phone; ?>"><br>
          <input type="submit" name="submit" value="submit">
       </form>

        </div>



      </div>
   </body>
 </html>


   </body>
 </html>
