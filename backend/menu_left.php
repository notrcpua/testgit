
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="./dist/img/login_a.jpeg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">

         <p></p>
        <a href="#"><i class="fa fa-circle text-success"></i> ออนไลน์</a>
      </div>
    </div>

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat">
          <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->

	<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Dashboard</li>

        <li>
        <a href="index.php">
          <i class="fa fa-pie-chart"></i> <span>Dashboard</span>

        </a>

      </li>
	  <li class "treeview-menu">
        <a href="index_dashboard2.php">
          <i class="fa fa-bar-chart"></i> <span>รายงานข้อมูลศิษย์เก่า</span>

        </a>

      </li>
	  <li class "treeview-menu">
        <a href="index_dashboard3.php">
          <i class="fa fa-bar-chart"></i> <span>รายงานภาวะการมีงานทำศิษย์เก่า</span>

        </a>

      <!-- </li>
	  <li class "treeview-menu">
        <a href="index_dashboard4.php">
          <i class="fa fa-bar-chart"></i> <span>แผนภูมิด้านการรับข่าวสาร</span>

        </a>

      </li>

	  <li class "treeview-menu">
        <a href="index_dashboard5.php">
          <i class="fa fa-bar-chart"></i> <span>แผนภูมิคุณภาพชีวิตผู้สูงอายุ</span>

        </a>

      </li>

	  <li class "treeview-menu">
        <a href="index_dashboard6.php">
          <i class="fa fa-bar-chart"></i> <span>แผนภูมิด้านปัญหาอุปสรรค</span>

        </a>

      </li>
      </ul> -->



    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">จัดการข้อมูล</li>


	  <li>
        <a href="admin.php">
          <i class="fa fa-edit"></i>
          <span>จัดการผู้ดูแลระบบ</span>
        </a>

      </li>

      <li>
        <a href="instructors.php">
          <i class="fa fa-edit"></i> <span>จัดการข้อมูลบุคลากร</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>

      <li>
        <a href="course.php">
          <i class="fa fa-edit"></i>
          <span>จัดการข้อมูลหลักสูตรการศึกษา</span>
        </a>
      </li>

     <li>
        <a href="about.php">
          <i class="fa fa-edit"></i>
          <span>ประชาสัมพันธ์</span>
        </a>
      </li>


	  <!-- <li>
        <a href="new.php">
          <i class="fa fa-edit"></i>
          <span>จัดการแกลลอรี่</span>

        </a> -->

      </li>

      <li>
        <a href="new_video.php">
          <i class="fa fa-edit"></i>
          <span>จัดการวิดีโอ</span>
        </a>
      </li>
      

      <li>
        <a href="type_appeople.php">
          <i class="fa fa-edit"></i> <span>จัดการข้อมูลศิษย์เก่า</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>

      <!-- <li>
        <a href="appeople_add.php">
          <i class="fa fa-edit"></i> <span>จัดการเพิ่มข้อมูลพื้นฐานเกษตร</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li> -->


      <li class="header"></li>
      <li><a href="../index.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')"><i class="fa fa-circle-o text-red"></i> <span>ออกจากระบบ</span></a></li>

    </section>
    <!-- /.sidebar -->
  </aside>