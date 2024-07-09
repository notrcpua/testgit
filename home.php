<?php
include 'connections1.php';
session_start();
$no_id = $_SESSION['no_id'];

if(!isset($no_id)){
   header('location:login.php');
   exit; 
}

if(isset($_GET['logout'])){
   unset($_SESSION['no_id']); 
   session_destroy();
   header('location:login.php');
   exit; // ต้องใส่ exit เพื่อหยุดการทำงานของสคริปต์หลังจากการ redirect
}

$select = mysqli_query($con, "SELECT * FROM `tbl_appeople` WHERE no_id = '$no_id'") or die('query failed');
if(mysqli_num_rows($select) > 0){
   $fetch = mysqli_fetch_assoc($select);
?>


<!--    
<div class="container">
   <div class="profile">
      <img src='./backend/img_alumni/<?php echo $fetch['img']; ?>'>
      <h3><?php echo $fetch['alumni_name'] .' '. $fetch['alumni_surname']; ?></h3>
      <a href="update_profile.php?ID=<?php echo $no_id; ?>" class="btn btn-primary">Update Profile</a>
      <a href="change_password.php?ID=<?php echo $no_id; ?>" class="btn btn-primary">Change Password</a>
      <a href="home.php?logout=<?php echo $no_id; ?>" class="delete-btn">Logout</a>
       -->


<?php
} // ปิด if(mysqli_num_rows($select) > 0)
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/styles_home.css">
  <!-- <script type="module" src="main.js" defer></script> -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
  <div class="container">
    <div class="navigation">
      <ul>
      &nbsp;
      <tr>
      <img src='./backend/img_alumni/<?php echo $fetch['img']; ?>' class="nav-image" alt="Brand Logo" style="width: 150px; height: 150px; display: block; margin: 0 auto;">
        </tr>
        <tr>
        &nbsp;
          <!-- <a href="#"> -->
          <h3 align="center" style="color: white;"><?php echo $fetch['alumni_name'] .' '. $fetch['alumni_surname']; ?></h3>
          <!-- </a> -->
         </tr>
        <li>
          <a href="#">
          <a href="update_profile.php?ID=<?php echo $no_id; ?>" class="btn btn-primary">Update Profile</a>
            
          </a>
        </li>
        <li>
          <a href="#">
          <a href="change_password.php?ID=<?php echo $no_id; ?>" class="btn btn-primary">Change Password</a>
            
          </a>
        </li>
        <li>
          <a href="#">
          <a href="home.php?logout=<?php echo $no_id; ?>" class="delete-btn">Logout</a>
            
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
            <span class="title">Help</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
            <span class="title">Settings</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <span class="title">Password</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
            <span class="title">Sign Out</span>
          </a>
        </li>
      </ul>
    </div> --> 
    <!-- <div class="main">
      <div class="topbar">
        <div class="toggle"><ion-icon name="menu-outline"></ion-icon></div>
        <div class="search">
          <label>
            <input type="text" placeholder="Search here">
            <ion-icon name="search-outline"></ion-icon>
          </label>
        </div>
        <div class="user">
          <img src="backend/test/1.png" alt="">
        </div>
      </div>
      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">1,504</div>
            <div class="cardName">Daily Views</div>
          </div>
          <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">80</div>
            <div class="cardName">Sales</div>
          </div>
          <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">284</div>
            <div class="cardName">Comments</div>
          </div>
          <div class="iconBx">
            <ion-icon name="chatbubbles-outline"></ion-icon>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers">$7,842</div>
            <div class="cardName">Earning</div>
          </div>
          <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
          </div>
        </div>
      </div>
      <div class="details">
        <div class="recentOrders">
          <div class="cardHeader">
            <h2>Recent Orders</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table>
            <thead>
              <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Payment</td>
                <td>Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Star Refrigerator</td>
                <td>$1200</td>
                <td>Paid</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Dell Laptop</td>
                <td>$110</td>
                <td>Due</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>Apple Watch</td>
                <td>$120</td>
                <td>Paid</td>
                <td><span class="status return">Return</span></td>
              </tr>
              <tr>
                <td>Addidas Shoes</td>
                <td>$620</td>
                <td>Due</td>
                <td><span class="status inProgress">In Progress</span></td>
              </tr>
              <tr>
                <td>Star Refrigerator</td>
                <td>$1200</td>
                <td>Paid</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Dell Laptop</td>
                <td>$110</td>
                <td>Due</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>Apple Watch</td>
                <td>$120</td>
                <td>Paid</td>
                <td><span class="status return">Return</span></td>
              </tr>
              <tr>
                <td>Addidas Shoes</td>
                <td>$620</td>
                <td>Due</td>
                <td><span class="status inProgress">In Progress</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="recentCustomers">
          <div class="cardHeader">
            <h2>Recent Customers</h2>
          </div>
          <table>
            <tr>
              <td width="60px"><div class="imgBx"><img src="backend/test/1.png" alt=""></div></td>
              <td><h4>David <br> <span>Italy</span></h4></td>
            </tr>
            <tr>
              <td width="60px"><div class="imgBx"><img src="backend/test/1.png" alt=""></div></td>
              <td><h4>Amit <br> <span>India</span></h4></td>
            </tr>
            <tr>
              <td width="60px"><div class="imgBx"><img src="backend/test/1.png" alt=""></div></td>
              <td><h4>Jane <br> <span>France</span></h4></td>
            </tr>
            <tr>
              <td width="60px"><div class="imgBx"><img src="backend/test/1.png" alt=""></div></td>
              <td><h4>John <br> <span>USA</span></h4></td>
            </tr>
            <tr>
              <td width="60px"><div class="imgBx"><img src="backend/test/1.png" alt=""></div></td>
              <td><h4>Elsa <br> <span>Germany</span></h4></td>
            </tr>
            <tr>
              <td width="60px"><div class="imgBx"><img src="backend/test/1.png" alt=""></div></td>
              <td><h4>David <br> <span>Italy</span></h4></td>
            </tr>
            <tr>
              <td width="60px"><div class="imgBx"><img src="backend/test/1.png" alt=""></div></td>
              <td><h4>Amit <br> <span>India</span></h4></td>
            </tr>
            <tr>
              <td width="60px"><div class="imgBx"><img src="backend/test/1.png" alt=""></div></td>
              <td><h4>Jane <br> <span>France</span></h4></td> -->
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
