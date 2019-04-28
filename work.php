<!--<!DOCTYPE html>
<html lang="en" dir="ltr">











<!--<div class="form-group col-md-6">
  <label for="village">last name:</label>
  <input type="text" class="form-control" id="l_name" name="l_name" value="<?=$l_name;?>" placeholder="last Name">
</div>
<div class="form-group col-md-6">
  <label for="village">Email:</label>
  <input type="email" class="form-control" id="email" name="email" value="<?=$email;?>" placeholder="Student Email">
</div>

<!--<div class="form-group col-md-6">
  <label for="village">Id No:</label>
    <input type="int" class="form-control" name="id_no" id="id_no"  value="<?=$id;?>"placeholder="Enter id number">
</div>
<div class="form-group col-md-6">
  <label for="village">phone No:</label>
      <input type="int" class="form-control" name="phone" id="phone" value="<?=$phone;?>"placeholder="Enter phone">
</div>
<div class="form-group col-md-6">
  <label for="village">gender:</label>
  <input type="text" class="form-control" name="gender" id="gender" aria-describedby="gender Help" value="<?=$gender?>" placeholder="Enter gender">
</div>
<div class="form-group col-md-6">
  <label for="village">sub county:</label>
  <input type="text" class="form-control" name="s_county" id="s_county"  value="<?=$s_county?>" placeholder="Enter sub county">
</div>
<div class="form-group col-md-6">
  <label for="village">ward:</label>
   <input type="text" class="form-control" name="ward" id="ward" value="<?=$ward;?>" placeholder="Enter ward">
</div>
<div class="form-group col-md-6">
  <label for="village">institution:</label>
<input type="text" class="form-control" name="ni" id="ni" value="<?=$ni?>" placeholder="Enter institution name">
</div>
<div class="form-group col-md-6">
  <label for="village">Admision No:</label>
  <input type="text" class="form-control" name="adm" id="adm"  value="<?=$adm?>"  placeholder="Enter admission number">
</div>
<div class="form-group col-md-6">
  <label for="village">Amount applied:</label>
  <input type="text" class="form-control" name="amount" id="amount"  value="<?=$amount?>" disabled placeholder="Enter amount">
</div>
<<div class="form-group col-md-6">
  <label for="village">Amount awarding:</label>
  <input type="text" class="form-control" name="a_amount" id="a_amount"  value="<?=$a_amount?>" placeholder="Enter amount awarding">
</div>
</div>-->





















<?php
$password = 'roman2147';

$hashed = password_hash($password, PASSWORD_DEFAULT);
echo $hashed;
 ?>
  <head>
    <meta charset="utf-8">
    <title>bursary management</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="ckeditor5-build-classic/ckeditor.js"></script>
    <style media="screen">
    header.masthead {
      text-align: center;
      color: white;
      background-image: url("images/portfolioBG.jpg");
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-position: center center;
      background-size: cover;
      height: 500px;
    }
    .ck-editor__editable {
      min-height: 200px;
    }
    header.masthead .intro-text {
    padding-top: 300px;
    padding-bottom: 200px;
    font-weight: bold;
  }
    </style>
  </head>
  <body>
<?php include 'includes/header.php'; ?>
<style media="screen">
  #sidebar-wrapper{
    margin-top:32%;
    height: auto;
  }
</style>
<div class="row">
  <div class="col-md-2">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
  </div>
<!--main body-->
<div class="col-md-8">

</div>
</div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
<!-- Menu Toggle Script -->
  $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  </script>

<script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  </body>
</html>-->
