
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

<body class="hold-transition skin-blue sidebar-mini header-blue" id="page-top">

    <script>
        window.print();
    </script>

    <!-- Left side column. contains the logo and sidebar -->
<br>

    <div class="box-body text-center" class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
    <div class="col-sm-9 offset-sm-3 col-md-12 offset-md-0 text-center align-self-center">
<?php

    include ('type_appeople_list_v1.php');


  ?>
    </div>
    </div>
    </div>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
