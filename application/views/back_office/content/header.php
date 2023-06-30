<?php 
if(isset($dash_active) == false) $dash_active = '';
if(isset($payment_active) == false) $payment_active = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hoosdook Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="icon-ellipsis"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item text-muted">
            <h4 style="margin-bottom: 20px" class="font-weight-bold text-muted">SERVICE</h4>
          </li>

          <li class="nav-item <?php echo $dash_active; ?>">
            <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-account-multiple" style="margin-right: 5%"></i>
              <span class="menu-title"> Nos artistes </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/Artiste_ctrl/artiste_liste"> Listes </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/artiste_ajout"> Ajouter artiste </a></li>
              </ul>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-folder-image" style="margin-right: 5%"></i>
              <span class="menu-title"> Nos tableaux </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/painting_liste"> Listes </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/painting_ajout"> Ajouter tableaux </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item <?php echo $payment_active; ?>">
            <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/">
              <i class="mdi mdi-cash-multiple" style="margin-right: 5%"></i>
              <span class="menu-title">Service payment</span>
            </a>
          </li>

          <li class="nav-item text-muted" style="margin-top: 20px;">
            <h4 class="font-weight-bold text-muted">COMPTABILITE</h4>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-book-open" style="margin-right: 5%"></i>
              <span class="menu-title"> Journal </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/journal_liste"> Achat </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/journal_pre"> Vente </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Banque </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Caisse </a></li>
              </ul>
            </div>
          </li> 
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic36" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-chart-gantt" style="margin-right: 5%"></i>
              <span class="menu-title"> General </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic36">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/grand_livre_compte"> Grand livre comptes </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/Admin_ctrl/balance_general"> Balance </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>