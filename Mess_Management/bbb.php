<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>
  <body>

       <div class="">
         <div class="col-md-4">
           <table class="table">
              <thead>
                <tr class="info">
                  <th>Date</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
           <?php
           include_once "connection.php";
           if(isset($_POST['search'])){
             $name=$_POST['name'];
             $sql = "SELECT * FROM cost_information where Cost_name LIKE '%$name%' order by cost_ID ASC";
            //echo "search by name";
           }else{
            // $sql = "SELECT * FROM member_info order by ID ASC";
              //  echo "don't search";
           }
               $result = mysqli_query($conn, $sql);
              //  $total_ID=0;
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                     //$total_ID=$total_ID+$row['ID'];
                      echo '<tr class="danger">' ;
                      //echo '<td>'.$row['name'].'</td>';
                      //echo '<td>'.$row['phone'].'</td>';
                      echo '<td>'.$row['cost_date'].'</td>';
                      echo '<td>'.$row['amount'].'</td>';
                     echo '</tr>';
                    }

                } else {
                    echo "0 results";
                }

            ?>
          </tbody>
          </table>
         </div>
         <div class="col-md-4">
           <table class="table">
              <thead>
                <tr class="info">
                  <th>Date</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
           <?php
           include_once "connection.php";
           if(isset($_POST['search'])){
             $name=$_POST['name'];
             $sql = "SELECT * FROM payment_information where payment_name LIKE '%$name%' order by payment_id ASC";
            //echo "search by name";
           }else{
            // $sql = "SELECT * FROM member_info order by ID ASC";
              //  echo "don't search";
           }
               $result = mysqli_query($conn, $sql);
              //  $total_ID=0;
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                     //$total_ID=$total_ID+$row['ID'];
                      echo '<tr class="danger">' ;
                      //echo '<td>'.$row['name'].'</td>';
                      //echo '<td>'.$row['phone'].'</td>';
                      echo '<td>'.$row['payment_date'].'</td>';
                      echo '<td>'.$row['payment_amount'].'</td>';
                     echo '</tr>';
                    }

                } else {
                    echo "0 results";
                }

            ?>
          </tbody>
          </table>
         </div>
         <div class="col-md-4">
           <table class="table">
              <thead>
                <tr class="info">
                  <th>Date</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
           <?php
           include_once "connection.php";
           if(isset($_POST['search'])){
             $name=$_POST['name'];
             $sql = "SELECT  member_info.name,meal_info.date, meal_info.meal FROM member_info right JOIN meal_info ON member_info.ID=meal_info.mi_id ORDER BY member_info.ID;";

            //echo "search by name";
           }else{
            // $sql = "SELECT * FROM member_info order by ID ASC";
              //  echo "don't search";
           }
               $result = mysqli_query($conn, $sql);
              //  $total_ID=0;
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                     //$total_ID=$total_ID+$row['ID'];
                      echo '<tr class="danger">' ;
                      echo '<td>'.$row['name'].'</td>';
                      //echo '<td>'.$row['phone'].'</td>';
                      echo '<td>'.$row['date'].'</td>';
                      echo '<td>'.$row['meal'].'</td>';
                     echo '</tr>';
                    }

                } else {
                    echo "0 results";
                }

            ?>
          </tbody>
          </table>
         </div>
       </div>
  </body>
</html>
