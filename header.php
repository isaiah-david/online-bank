<!DOCTYPE html>
<html lang="en">
  <head>


 <?php
  $pageTitle = "Dashboard"; // default title

  // Get the current file name without extension
  $currentPage = basename($_SERVER['SCRIPT_FILENAME'], ".php");

  // Set titles for known pages
  switch ($currentPage) {
    case 'local_transfer.php':
      $pageTitle = "local transfer";
      break;
    case 'loan_request.php':
      $pageTitle = "loan request";
      break;
    case 'loan_history.php':
      $pageTitle = "loan history";
      break;
    case 'irs_tax_refund.php':
      $pageTitle = "ires tax refund";
      break;
    case 'international_wire.php':
      $pageTitle = "international wire transfer";
      break;
    case 'dashboard.php':
      $pageTitle = "Dashboard";
      break;
    case 'login.php':
      $pageTitle = "login";
      break;
      case 'register.php':
      $pageTitle = "register";
      break;
      case 'desposit.php':
      $pageTitle = "deposit";
      break;
      case 'profile.php':
      $pageTitle = "profile";
      break;
      case 'secure_banking.php':
      $pageTitle = "secure banking";
      break;
      case 'support_ticket.php':
      $pageTitle = "support ticket";
      break;
      case 'transactions.php':
      $pageTitle = "transactions";
      break;
      case 'cards.php':
      $pageTitle = "cards";
      break;
    default:
      $pageTitle = ucfirst($currentPage);
  }
?>
<title>First global bank | <?= $pageTitle ?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">

<link href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>