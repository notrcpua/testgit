<?php  
 include ("connections.php");  
 if(isset($_POST["query"]))  
 {  
      $output = array();  
      //$query = "SELECT * FROM tbl_member  WHERE m_name LIKE '%".$_POST["query"]."%'";  
	  $query = "SELECT * FROM tbl_member";  
      $result = mysqli_query($con, $query);  
     // $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
		   //$output .= "\"".$row["m_name"].' '.$row["m_lastname"].' ('.$row["member_id"].')",';  
		   
		   //$output .= $row["m_name"].' '.$row["m_lastname"].' ('.$row["member_id"].')';
		   
		   //var countries = ["Afghanistan","Albania"
		   
		   array_push($output,$row["m_name"].' '.$row["m_lastname"].' ('.$row["member_id"].')');
           }  
      }  
      else  
      {  
          // $output .= 'ไม่พบชื่อผู้ประกอบการ';  
      }  
     // $output .= '</ul>';  
	 // $output=substr($output,0,-1);
	      $output1 = json_encode($output, JSON_UNESCAPED_UNICODE);
	 
      echo $output1;  
 }  
 ?>  