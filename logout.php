<?php 
    session_start();
    session_unset();
    session_destroy();
    
    header("location:index_login2.php");
    exit(0);
?>