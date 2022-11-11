<?php require_once '../App.php' ?>
<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Freedom Guarantee Trust Bank</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    
    

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <script src="assets/js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->
<!-- new -->
<link rel="stylesheet" href="css/bootstrap1.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="vendors/morris/morris.css">

<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style1.css" />
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<!-- end new -->
</head>

<?php
// dnd($_SESSION['email']);
$sql = "SELECT * FROM  users WHERE email = '{$_SESSION['email']}' ";
$select_all_users = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($select_all_users)) {
    $id =  $row['id'];
    $firstname =  $row['firstname'];
    $lastname =  $row['lastname'];
    $_SESSION['email'] =  $row['email'];
   $pin = $row['transaction_pin'];
   $_SESSION['avata'] = $row['avarter'];
  
   $_SESSION['user_id'] = $id;
  //  $_SESSION['avata'] = $avata;
   $_SESSION['firstname'] = $firstname;
   $_SESSION['pin'] = $pin;
   $_SESSION['lastname'] = $lastname;
   $_SESSION['phonenumber'] = $row['phonenumber'];
   $_SESSION['address'] = $row['address'];
   $_SESSION['state'] = $row['state'];
   $_SESSION['account_type'] = $row['account_type'];
   $_SESSION['account_number'] = $row['account_number'];
   $_SESSION['country'] = $row['country'];
   $_SESSION['account_status'] = $row['account_status'];
   $_SESSION['total_credited'] = $row['total_credited'];
   

}

// dnd( $_SESSION['logged_in']);

$sql = "SELECT account_balance FROM users WHERE  id = '{$_SESSION['user_id']}' ";
$select_acc = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($select_acc)) {
  // dnd($row); die;
  $_SESSION['account_balance'] = $row['account_balance'];
}



$sql = "SELECT total_debit FROM users WHERE  id = '{$_SESSION['user_id']}' ";
$select_acc = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($select_acc)) {
  // dnd($row); die;
  $_SESSION['total_debited'] = $row['total_debit'];

}



 

