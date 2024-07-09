<?php  
 include ("connections.php");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM tbl_member  WHERE m_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($con, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
		   $output .= '<li>'.$row["m_name"].' '.$row["m_lastname"].' ['.$row["member_id"].']</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>ไม่พบชื่อผู้ประกอบการ</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  