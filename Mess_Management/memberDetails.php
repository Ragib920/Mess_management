<?php
session_start();

if(!isset($_SESSION['loggedin'])){
  header("Location:index.html");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Member Details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
 <div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ragib</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
            <ul class="dropdown-menu">
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="IMG_3092_edited.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Ragib Shahriar</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
            <li class="user-header">
              <img src="IMG_3092_edited.jpg" class="img-circle" alt="User Image">
            </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="IMG_3092_edited.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ragib Shahriar</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="searchResult.php" method="post" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="name" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="admin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Updates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="updatePayment.php"><i class="fa fa-circle-o"></i> update payment</a></li>
            <li><a href="updateCost.php"><i class="fa fa-circle-o"></i> update cost</a></li>
            <li><a href="updateMeal.php"><i class="fa fa-circle-o"></i> update meal</a></li>
          </ul>
        </li>
        <li class="active">
          <a href="memberDetails.php">
            <i class="fa fa-table"></i> <span>Member Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="">
          <a href="registerMember.php">
            <i class="fa fa-share"></i> <span>Register Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Member Details
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i>Member Details</a></li>
        <li class="active">  </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
      <!-- hole body -->
      <?php
      if(isset($_GET['ID'])){

      	include_once "connection.php";
      	$id=$_GET['ID'];
      	$sql = "DELETE FROM member_info WHERE ID='$id'";

      mysqli_query($conn, $sql);
      }
      ?>
      <div class="col-md-11">
        <table class="table" style="margin-top:50px;margin-left:55px;">
           <thead>
             <tr class="info">
               <th>Image</th>
               <th>Name</th>
               <th>phone</th>
               <th>Gmail</th>
               <th>Address</th>
               <th>Join Date</th>
               <th>Action</th>


             </tr>
           </thead>

           <tbody>
             <?php
                 include_once "connection.php";
                 $sql = "SELECT * FROM  member_info order by ID desc";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                            echo '<tr class="danger">' ;
                            echo '<td> <img  height="100px" width="100px" src="uploads/'.$row["file_name"].'"</td>';
                           echo '<td>'.$row['name'].'</td>';
                           echo '<td>'.$row['phone'].'</td>';
                           echo '<td>'.$row['gmail'].'</td>';
                           echo '<td>'.$row['address'].'</td>';
                            echo '<td>'.$row['join_date'].'</td>';
                           echo '<td>  <a href="memberDetails.php?ID='.$row['ID'].'" class="btn btn-info btn-sm">
                          <span class="glyphicon glyphicon-remove"></span> Remove </a>
                          <a href="updateMember.php?ID='.$row['ID'].'" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-remove"></span> Edit </a>
                          </td>';
                           echo '</tr>';
                          }
                      } else {
                          echo "0 results";
                      }

                      mysqli_close($conn);
              ?>
            </tbody>
          </table>
      </div>
      </div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
