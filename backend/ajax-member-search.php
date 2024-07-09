<?php
require_once('connection.php');
 
function get_name($conn , $term){ 
 $query = "SELECT m_name FROM tbl_member WHERE m_name LIKE '%".$term."%' ORDER BY m_name ASC";
 $result = mysqli_query($conn, $query); 
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data; 
}
 
if (isset($_GET['term'])) {
 $getName = get_name($conn, $_GET['term']);
 $nameList = array();
 foreach($getName as $name){
 $nameList[] = $name['m_name'];
 }
 echo json_encode($nameList);
}
?>