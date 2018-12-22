<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- custom style -->
  <link rel="stylesheet" href="<?php base_url(); ?>assets/dist/css/style.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style >
  .msg{
    color: green;
    font-weight: bold;
  }
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
          <img src="<?php base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
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
        <li>
          <a href="<?php echo base_url(); ?>admin_dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <!-- first menu strat -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Banner Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>banner_edit"><i class="fa fa-edit"></i> Edit</a></li>
            <li><a href="<?php echo base_url(); ?>banner_view"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
        <!-- first menu end  -->
        <!-- seccond menu start -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Second Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>second_sec_edit"><i class="fa fa-edit"></i> Edit</a></li>
            <li><a href="<?php echo base_url(); ?>second_sec_view"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
        <!-- seccong menu end -->
        <!-- third menu start -->
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Second Section Service</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>second_sec_service_edit"><i class="fa fa-edit"></i> Edit</a></li>
            <li><a href="<?php echo base_url(); ?>second_sec_service_view"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Expertise Skill</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>expertise_skill_edit"><i class="fa fa-edit"></i> Edit</a></li>
          </ul>
        </li>
        <!-- third menu end -->
        <!-- fourth menu start-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Our Service Headding</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>our_service_headding_edit"><i class="fa fa-edit"></i> Edit Headding</a></li>
            <li><a href="<?php echo base_url(); ?>our_service_feature_edit"><i class="fa fa-circle-o"></i> Edit Feature Section</a></li>
          </ul>
        </li>
        <!-- fourth menu end -->
        <!-- fifth menu start-->
        
        <!-- fifth menu end -->
        <!-- Sixth menu start-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Client Counter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="client-counter.html"><i class="fa fa-edit"></i> Edit</a></li>
            <li><a href="client-counter-view.html"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
        <!-- sixth menu end -->
        <!-- seven menu end -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Portrfolio Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="portfolio-headding.html"><i class="fa fa-edit"></i>Add Portfolio Headding</a></li>
            <li><a href="portfolio-details.html"><i class="fa fa-edit"></i> Add Portfolio Details</a></li>
            <li><a href="portfolio-details-view.html"><i class="fa fa-circle-o"></i> View</a></li>

          </ul>
        </li>
        <!-- seven menu end -->
        <!-- eight menu start -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Why Choose Us Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="why-chooseus-headding.html"><i class="fa fa-edit"></i> Headding & Image & video</a></li>
            <li><a href="acrodion-details.html"><i class="fa fa-edit"></i> Acrodion Details</a></li>
            <li><a href="why-choose-view.html"><i class="fa fa-circle-o"></i> View</a></li>

          </ul>
        </li>
        <!-- eight menu end -->
        <!-- ninth menu start -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Team Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="team-details.html"><i class="fa fa-edit"></i> Edit</a></li>
            <li><a href="team-details-view.html"><i class="fa fa-circle-o"></i> View</a></li>

          </ul>
        </li>
        <!-- ninth menu end -->
        <!-- tenth menu start -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Price Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="price-name.html"><i class="fa fa-edit"></i> Edit Price Name</a></li>
            <li><a href="feature-name.html"><i class="fa fa-edit"></i> Add Feature Name</a></li>
            <li><a href="price-section-view.html"><i class="fa fa-circle-o"></i> View</a></li>

          </ul>
        </li>
        <!-- tenth menu end -->
        <!-- tenth menu start -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Testimonials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="testimonial.html"><i class="fa fa-edit"></i> Add Testimonials</a></li>
            <li><a href="testimonial-view.html"><i class="fa fa-circle-o"></i> View</a></li>

          </ul>
        </li>
        <!-- tenth menu end -->


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Second Section Headding Edit
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Second Section Headding Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 ">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Put Icon and Content</h3>
              <p>(For Column One)</p>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="myForm1">
              <div class="box-body">
                <div class="form-group">
                  <label>Icon</label>
                  <input type="text" class="form-control" name="icon" required>
                </div>
                <div class="form-group">
                  <label>Tittle</label>
                  <input type="text" class="form-control" name="tittle" required>
                </div>
                <div class="form-group">
                  <label>Sub Content</label>
                  <input type="text" class="form-control" name="paragraph" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input id="submit" type="submit" name="submit" class="btn btn-primary" value="Submit" onclick="test();">
              </div>
            </form>
            <p class="msg"></p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Put Icon and Content</h3>
              <p>(For Column Two)</p>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="myForm2" >
              <div class="box-body">
                <div class="form-group">
                  <label>Icon</label>
                  <input type="text" class="form-control" name="icon" required>
                </div>
                <div class="form-group">
                  <label>Tittle</label>
                  <input type="text" class="form-control" name="tittle" required>
                </div>
                <div class="form-group">
                  <label>Sub Content</label>
                  <input type="text" class="form-control" name="paragraph" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input id="submit" type="submit" name="submit" class="btn btn-primary" value="Submit" onclick="test();">
              </div>
            </form>
            <p class="msg"></p>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 ">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Put Icon and Content</h3>
              <p>(For Column Three)</p>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="myForm3" >
              <div class="box-body">
                <div class="form-group">
                  <label>Icon</label>
                  <input type="text" class="form-control" name="icon" required>
                </div>
                <div class="form-group">
                  <label>Tittle</label>
                  <input type="text" class="form-control" name="tittle" required>
                </div>
                <div class="form-group">
                  <label>Sub Content</label>
                  <input type="text" class="form-control" name="paragraph" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input id="submit" type="submit" name="submit" class="btn btn-primary" value="Submit" onclick="test();">
              </div>
            </form>
            <p class="msg"></p>
          </div>
        </div>
        <!-- ./col -->

      </div>
      <div class="row">

        <div class="col-lg-9 notice">
          <p class="note"><b>*NOTE  </b></p>
          <p>Please Put Icon as Describe Below.<br><b><i>Rule:  </i></b><b>[icon-basic-.....-.....]</b></p>
          <p>Here are some example <span>for more details please visit font https://fontawesome.com/icons?d=gallery</span></p>
          <ul>
              <li>icon-basic-book-pen</li>
              <li>icon-basic-cards-diamonds</li>
              <li>icon-basic-pencil-ruler</li>
          </ul>
        </div>
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>


<!-- jQuery 3 -->
<script src="<?php base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php base_url(); ?>assets/dist/js/demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
// ajax for 1st form
$(function () {
  $('#myForm1').submit(function (e) {
    var formData = $(this);
    e.preventDefault();
    $.ajax({
      type: 'post',
      url: '<?php echo base_url(); ?>Admin/SecondServiceForm1Submit',
      data: formData.serialize(),
      success: function () {
        $('#myForm1').trigger("reset");
        swal("Good!", "Data Saved Successfully", "success");
      }
    });
  });
});

// ajax for 2nd form
$(function () {
  $('#myForm2').submit(function (e) {
    var formData = $(this);
    e.preventDefault();
    $.ajax({
      type: 'post',
      url: '<?php echo base_url(); ?>Admin/SecondServiceForm2Submit',
      data: formData.serialize(),
      success: function () {
        $('#myForm2').trigger("reset");
        swal("Good!", "Data Saved Successfully", "success");
      }
    });
  });
});
// ajax for 3rd form
$(function () {
  $('#myForm3').submit(function (e) {
    var formData = $(this);
    e.preventDefault();
    $.ajax({
      type: 'post',
      url: '<?php echo base_url(); ?>Admin/SecondServiceForm3Submit',
      data: formData.serialize(),
      success: function () {
        $('#myForm3').trigger("reset");
        swal("Good!", "Data Saved Successfully", "success");
      }
    });
  });
});

</script>

</body>
</html>
