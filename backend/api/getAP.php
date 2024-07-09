
    <?php

    include("../connections.php");


    $sql_ap = "SELECT * FROM `tbl_ap`";

    $sql_appeople = "SELECT * FROM `tbl_appeople`";



    $query_ap = mysqli_query($con,$sql_ap) or die("Error:" . mysqli_error());
    $query_appeople = mysqli_query($con,$sql_appeople) or die("Error:" . mysqli_error());

    
    $tbl_ap = [];
    while($row = mysqli_fetch_assoc($query_ap)){
        array_push($tbl_ap,$row);
    }

    $tbl_appeople = [];
    while($row = mysqli_fetch_assoc($query_appeople)){
        array_push($tbl_appeople,$row);
    }
    
    if(isset($tbl_ap)){
        $obj = array('tbl_ap'=> $tbl_ap);
        echo json_encode($obj,JSON_UNESCAPED_UNICODE);
    }
    ?>
