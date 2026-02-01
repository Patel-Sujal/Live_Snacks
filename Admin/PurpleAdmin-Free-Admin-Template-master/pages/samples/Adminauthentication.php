<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
<?php
$hide1="hidden";
$hide2="";
if(isset($_POST['btnok']))
{
    $user=$_POST['admin'];
    $pass=$_POST['Pass'];
    require "../../../../vendor/autoload.php";
    $con=new MongoDB\Client;
    $collection=$con->admin->Profiles;
    $show = $collection->find([]);
    foreach($show as $doc)
    {
        if($doc->Username==$user)
        {
            if($doc->Password==$pass)
            {
                $hide1="";
                $hide2="hidden";
                session_start();
                $_SESSION["admin"]=$doc->Username;
            }
           
        }else{
            $hide1="hidden";
            $hide2="";
        }
    }
}
?>

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
          <div class="row flex-grow">
            <div class="col-lg-7 mx-auto text-white">
              <div class="row align-items-center d-flex flex-row">
                <div class="col-lg-6 text-lg-right pr-lg-4">
                  <h1 <?php echo $hide2;?> class="display-1 mb-0">401</h1>
                  <h1   <?php echo $hide1;?> class="display-1 mb-0">🍔</h1>
                </div>
                <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                  <h2  <?php echo $hide2;?> >SORRY!</h2>
                  <h2  <?php echo $hide1;?> >Success...</h2>
                  <h3 <?php echo $hide2;?> class="font-weight-light">Invalid Username Or Password...</h3>
                  <h3 <?php echo $hide1;?> class="font-weight-light">Click below link to continue...</h3>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12 text-center mt-xl-2">
                  <a <?php echo $hide2;?> class="text-white font-weight-medium" href="../../AdminLogin.php">Back to Login</a>
                  <a  <?php echo $hide1;?> class="text-white font-weight-medium" href="../../index.php">DashBoard</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>