<?php session_start();?>
<?php include('h.php');?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <?php error_reporting( error_reporting() & ~E_NOTICE ); ?>
      <!-- Header Navbar: style can be found in header.less -->
      <?php include('navbar.php');?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('menu_left.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        จัดการประชาสัมพันธ์
        <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">
                  <a href="about.php?act=add" class="btn btn-primary btn-lg">เพิ่มประชาสัมพันธ์</a>  
                </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-sm-8">
                  
               
               
                <?php
                
                isset( $_GET['act'] ) ? $act = $_GET['act'] : $act = "";
                if($act == 'add'){
                  include('about_form_add.php');
                }elseif ($act == 'edit') {
                  include('about_form_edit.php');  
                }
                else {
                  include('about_list.php');  
                }
              ?>

                 </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </section>
      <!-- /.content -->


    </div>
    <?php include('footer.php');?>
    