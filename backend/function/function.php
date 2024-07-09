<?php
//ตรวจสอบว่า email ซ้ำกันหรือเปล่า
function dup_email($users_email,$conn){
    $sql = "SELECT users_email FROM users WHERE users_email = '$users_email'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
    return $row;
}
?>