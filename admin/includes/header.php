
<?php include 'config/config.php'; ?>
<?php

 ?>
 <?php
 if (!is_logged_in()) {
   logged_in_error_redirect();

 }?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>Bursary proccessing</title>
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../ckeditor5-build-classic/ckeditor.js"></script>

    <!-- Custom styles for this template -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
  <style media="screen">
    body{
      background-color: white;
    }
  </style>
</head>

<body>

  <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand text-uppercase" href="index.php">Bursary processing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item" style="margin-right:10px;">
        <img src="../images/default-avatar_s.gif" alt="profile-image"
             class="img-fluid img-thumbnail rounded-circle" style="height:50px; width:45px;">
      </li>
      <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <?=$user_data['f_name'];?>
     </a>
     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="change.php">Change Password</a>
       <a class="dropdown-item" href="logout.php">Logout</a>
     </div>
   </li>
   <li class="nav-item dropdown">
       <i class="fa fa-bell fa-2x"></i>
    </li>
<li class="nav-item dropdown">
 <a class="dropdown-item" href="logout.php">Help</a>
</li>

  </div>
</nav>
<!--end nav-->
