<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Pro - Bootstrap 4 Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content=",">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>EFS</title>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link href="vendors/css/flag-icon.min.css" rel="stylesheet">
  <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">
  <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script src="jQueryAssets/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>


  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Styles required by this views -->
<style type="text/css">
  .error
{
  color: red;
  size: 80%
}
.hidden
{
  display:none;
}

</style>
</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-info">NEW</span></a>
          </li>

          <li class="nav-title">
            Master
          </li>
<!--           <li class="nav-item">
            <a href="colors.html" class="nav-link"><i class="icon-drop"></i> Colors</a>
          </li>
          <li class="nav-item">
            <a href="typography.html" class="nav-link"><i class="icon-pencil"></i> Typograhy</a>
          </li> -->
          <li class="nav-title">
           <a href="index.php" class="nav-link"><i class="icon-pencil"></i> Add Sector/Journal</a>
          </li>
           <li class="nav-title">
           <a href="d1.php" class="nav-link"><i class="icon-pencil"></i> Add Polling/Personnel</a>
          </li>
          <li class="nav-title">
           <a href="d2.php" class="nav-link"><i class="icon-pencil"></i> Add Polling Station</a>
          </li>
          <li class="nav-title">
           <a href="d3.php" class="nav-link"><i class="icon-pencil"></i> Sector Master</a>
          </li>
          <li class="nav-title">
           <a href="d4.php" class="nav-link"><i class="icon-pencil"></i> Group Master</a>
          </li>
          <li class="nav-title">
           <a href="d5.php" class="nav-link"><i class="icon-pencil"></i> PS Randomization</a>
          </li>
          

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            
          </div>
        </li>
      </ol>