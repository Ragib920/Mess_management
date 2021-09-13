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
  <title>Register Member</title>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
        <li class=" ">
          <a href="admin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
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
        <li class="">
          <a href="memberdetails.php">
            <i class="fa fa-table"></i> <span>Member Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="active">
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
        Register Member
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-share"></i> Register Member</a></li>
        <li class="active"> </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <div class="row">
      <!-- hole body -->
        <div class="col-md-7" style=" margin-left:280px; margin-top:60px;">
          <form class="" action="memberInsert.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                   <label for="num">Name:</label>
                   <input type="text" name="name" class="form-control" placeholder="name"  required >
                 </div>
               </div>
               <div class="col-lg-4 col-md-4">
                    <!-- image-preview-filename input [CUT FROM HERE]-->
                    <script type="text/javascript">
                    $(document).on('click', '#close-preview', function(){
      $('.image-preview').popover('hide');
      // Hover befor close the preview
      $('.image-preview').hover(
          function () {
             $('.image-preview').popover('show');
          },
           function () {
             $('.image-preview').popover('hide');
          }
      );
    });

    $(function() {
      // Create the close button
      var closebtn = $('<button/>', {
          type:"button",
          text: 'x',
          id: 'close-preview',
          style: 'font-size: initial;',
      });
      closebtn.attr("class","close pull-right");
      // Set the popover default content
      $('.image-preview').popover({
          trigger:'manual',
          html:true,
          title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
          content: "There's no image",
          placement:'bottom'
      });
      // Clear event
      $('.image-preview-clear').click(function(){
          $('.image-preview').attr("data-content","").popover('hide');
          $('.image-preview-filename').val("");
          $('.image-preview-clear').hide();
          $('.image-preview-input input:file').val("");
          $(".image-preview-input-title").text("Browse");
      });
      // Create the preview image
      $(".image-preview-input input:file").change(function (){
          var img = $('<img/>', {
              id: 'dynamic',
              width:250,
              height:200
          });
          var file = this.files[0];
          var reader = new FileReader();
          // Set preview image into the popover data-content
          reader.onload = function (e) {
              $(".image-preview-input-title").text("Change");
              $(".image-preview-clear").show();
              $(".image-preview-filename").val(file.name);
              img.attr('src', e.target.result);
              $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
          }
          reader.readAsDataURL(file);
      });
    });
                    </script>
                    <style media="screen">
                    .container{
                            margin-top:20px;
                          }
                          .image-preview-input {
                            position: relative;
                          overflow: hidden;
                          margin: 0px;
                            color: #333;
                            background-color: #fff;
                            border-color: #ccc;
                          }
                          .image-preview-input input[type=file] {
                          position: absolute;
                          top: 0;
                          right: 0;
                          margin: 0;
                          padding: 0;
                          font-size: 20px;
                          cursor: pointer;
                          opacity: 0;
                          filter: alpha(opacity=0);
                          }
                          .image-preview-input-title {
                            margin-left:2px;
                          }
                    </style>
                       <label for="email">Add photo:(<span style="font-weight:bold;color:red">UP TO 2MB</span>)</label>
               <div class="input-group image-preview">

                   <input type="text"   class="form-control image-preview-filename" > <!-- don't give a name === doesn't send on POST/GET -->
                   <span class="input-group-btn">
                       <!-- image-preview-clear button -->
                       <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                           <span class="glyphicon glyphicon-remove"></span> Clear
                       </button>
                       <!-- image-preview-input -->
                       <div class="btn btn-default image-preview-input">
                           <span class="glyphicon glyphicon-folder-open"></span>
                           <span class="image-preview-input-title">Browse</span>
                           <input type="file" accept="image/png, image/jpeg, image/gif" name="file" id="image"/> <!-- rename it -->
                       </div>
                   </span>
               </div><!-- /input-group image-preview [TO HERE]-->
                  </div>


             </div>
             <div class="row">
               <div class="col-md-6">
                   <div class="form-group">
                       <label for="num">Phone Number:</label>
                       <input type="text" name="phone" class="form-control" placeholder="phone"  required >
                   </div>
              </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                   <div class="form-group">
                       <label for="num">Gmail:</label>
                       <input type="gmail" name="gmail" class="form-control" placeholder="abc@gmail.com"  required >
                   </div>
              </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                   <div class="">
                       <label for="num">Address:</label>
                       <input type="text" name="address" class="form-control" placeholder="address"  required >
                   </div>
              </div>
             </div>
             <br>
             <div class="form-group" style="margin-left:100px;">
               <input type="submit" class="btn btn-primary btn-lg" value="submit" name="submit">
             </div>
          </form>
        </div>

        </div>
      </div>
    </section>
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
