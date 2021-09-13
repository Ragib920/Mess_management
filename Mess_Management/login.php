<select>
<?php
session_start();
if(isset($_POST['submit'])){
  include_once "connection.php";
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql = "SELECT a_id FROM admin where email='$email' and password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    //  echo '<option value="'.$row['a_id'].'">'.$row['a_id'].'</option>';
        $_SESSION['loggedin']=$row['a_id'];
       header("Location:admin.php");
    }
} else {
  header("Location:index.html");
}

mysqli_close($conn);
}else{
  echo "not set";
}


 ?>
</select>
