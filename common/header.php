<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <script src="<?php echo $BASE_URL; ?>/assets/393752952e.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker 
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/plugins/daterangepicker/daterangepicker.css">-->
  <link type="text/css" href="<?php echo $BASE_URL; ?>/assets/datepicker.min.css" rel="stylesheet" />
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/style.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
  
  <!-- datatable -->
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<!-- datatable -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.1/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.1/select2.min.css" />
  

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
  #codeigniter_profiler 
  {
	  width: 80%;
    float: right;
  }
  .notification
  {
	  color:white;
	  padding:10px

  }
  
  .n-error
  {
	  background: red;
  }
  
  .n-success
  {
	  background: green;
  }
  
  .bg-grp1
  {
	  background:#ffc9fb;
	  padding:20px;
	  margin:20px 0;
  }
  
  
  .bg-grp2
  {
	  background:#fff0b7;
	  padding:20px;
	  margin:20px 0;
  }
  
  .bootstrap-datetimepicker-widget
  {
	  display:block;
  }
  
  #knowasset
  {
	  display:none;
  }
  
  .review-key li {
    list-style: none;
    float: left;
    padding: 20px 10px;
	}

	.review-key li a{
     color: #000;
    text-decoration: underline;
   
	}
	
	.sidebar-mini
	{
		overflow-x:auto;
	}


  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav"  style="width:100%;">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
	  
      <li class="nav-item d-none d-sm-inline-block" style="width:70%; padding: 8px 0 0 20px;">
        Date & Time: <?php echo date("d-m-Y h:i A"); ?> &nbsp; &nbsp; 
      </li>
	  
      <li class="nav-item d-none d-sm-inline-block" >
        <a href="<?php echo $BASE_URL; ?>/index.php" class="nav-link"  style="float:right;">Logout</a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->
