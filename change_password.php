<?php 
include('condb.php');  // Connect to your database
$ID = $_GET['ID'];
$sql = "SELECT * FROM tbl_appeople WHERE no_id=$ID";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  body {
    background-color: #d0d9ff;
    padding-top: 50px;
  }
  .form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
  }
</style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <div class="form-container">
        <h4 class="mb-2 text-center">Form Reset Password</h4>
        <form action="change_password_db.php" method="post">
          <div class="form-group">
            <label for="alumni_name" class="col-sm-4 col-form-label">Username:</label>
            <div class="col-sm-15">
              <input type="text" name="alumni_name" required class="form-control" autocomplete="off" value="<?php echo $row['alumni_name'];?>" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="a_pass1" class="col-sm-4 control-label">New Password:</label>
            <div class="col-sm-15">
              <input type="password" name="a_pass1" required class="form-control">
            </div>
          </div>

          <div class="form-group ">
            <label for="a_pass2" class="col-sm-4 control-label">Confirm Password:</label>
            <div class="col-sm-15">
              <input type="password" name="a_pass2" required class="form-control">
            </div>
          </div>
          <input type="hidden" name="no_id" value="<?php echo $row['no_id'];?>">
          <div class="form-group text-center">
              <button type="submit" class="btn btn-success" style="background-color: #259b24; color: white;">Save</button>
              <a href="javascript:history.go(-1);" class="btn btn-default" style="background-color: #e51c23; color: white;">Back</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
