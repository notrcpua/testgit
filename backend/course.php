<?php session_start();?>
<?php include ('h.php');


function includeWithVariables($filePath, $variables = array(), $print = true)
{
  $output = NULL;
  if (file_exists($filePath)) {
    // Extract the variables to a local namespace
    extract($variables);

    // Start output buffering
    ob_start();

    // Include the template file
    include $filePath;

    // End buffering and return its contents
    $output = ob_get_clean();
  }
  if ($print) {
    print $output;
  }
  return $output;
}

?>

<body class="hold-transition skin-blue sidebar-mini ">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <?php error_reporting(error_reporting() & ~E_NOTICE);?>
      <!-- Header Navbar: style can be found in header.less -->
      <?php include 'navbar.php';?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'menu_left.php';?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        จัดการ ระบบหลักสูตรการศึกษา
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
              </div>
              <!-- /.box-header -->
              <div class="box-body" class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
              <div class="col-sm-12 col-xxl-12">

              <?php

            isset($_GET['act']) ? $act = $_GET['act'] : $act = "";

              if ($act == 'edit') {
              $id = $_GET["ID"];

               includeWithVariables('course_form_edit.php', array('usersID' => $id));
                 } else {
                    include ('course_list.php');
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
    <?php include 'footer.php';?>