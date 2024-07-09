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

<script>

  const printTable = () => {
    window.open("./type_appeople_v1.php");
  }

</script>

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
        จัดการข้อมูลศิษย์เก่า
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
                  <a href="type_appeople.php?act=add" class="btn btn-success text-white">เพิ่มข้อมูลศิษย์เก่า</a> 
                </h3>

                <h3 class="box-title">
                  <a href="Create_csv.php" class="btn btn-warning text-white">อัพโหลดไฟล์ CSV</a> 
                </h3>
        <!-- <a onClick="window.location.href='file_excel/templant_excel.csv'" class="btn btn-primary text-white" target="_blank">ดาวน์โหลดเทมเพลต CSV</a> -->
                  <input type="button" class="btn btn-info text-white" value="ดาวน์โหลดเทมเพลต CSV" onClick="window.location.href='../file_csv/alumni.csv'">

                <h3 class="box-title">
                  <button type="button" class="btn btn-primary text-white" onclick="printTable()">Print</button>
                  <!-- <a href="" class="btn btn-primary text-white">Print</a>  -->
                </h3>

              </div>
              <!-- /.box-header -->
              <div class="box-body" class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
              <div class="col-sm-12 col-xxl-12">

                <?php

                isset($_GET['act']) ? $act = $_GET['act'] : $act = "";
                  if ($act == 'add') {
                    include ('type_appeople_form_add.php');
                  } elseif ($act == 'edit') {
                    $appeople_id = $_GET["ID"];

                    includeWithVariables('type_appeople_form_edit.php', array('no_id' => $appeople_id));
                  } else {
                    include ('type_appeople_list.php');
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