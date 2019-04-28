<?php
include 'config/config.php';

$id = ((isset($_POST['idNumber']))?$_POST['idNumber']:'');
$id = trim($id);
$password = ((isset($_POST['idNumber']))?$_POST['password']:'');
$password = trim($password);
$errors = array();
$hashed = password_hash($password, PASSWORD_DEFAULT);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bursary login</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="ckeditor5-build-classic/ckeditor.js"></script>
    <style media="screen">
    body{
background-image: url("images/Graduation web.png");
background-repeat: no-repeat;
background-size: 100vw 100vh;
background-attachment: fixed;
}
#login-form{
width: 50%;
height: 60%;
border: 1px solid black;
border-radius: 5px;
box-shadow: 7px, 7px, 15px rgba(0,0,0,0.6);
margin: 8% auto;
padding: 15px;
background-color: #fff;
opacity: 0.8;
 filter: alpha(opacity=50);
}

  </head>
</style>
  <body>

<style media="screen">
  #sidebar-wrapper{
    margin-top:32%;
    height: auto;
  }
</style>
<!--row-->
<section>
<div class="container">
  <div id="login-form">
    <div>
<?php
if ($_POST) {
  if (empty($id) || empty($password)) {
    $errors[] = 'id number and password are required!!';
  }

  if (strlen($password) < 6) {
  $errors[] = 'password must be atleast 6 characters';
  }
  $query = $conn->query("SELECT * FROM users WHERE id_no ='$id'");
    $user = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    if ($count < 1) {
      $errors[] = 'user id number does\'t exist in our database';
    }
    if (!password_verify($password, $user['password'])) {
      $errors[] = 'invalid password please try again!!';
    }
  if (!empty($errors)) {
  echo  display_errors($errors);
}else {
  $user_id = $user['id'];
  //log user in
  login($user_id);
}
}
 ?>
    </div>
<div class="card">
  <h3 class="card-header bg-success">USER LOGIN</h3>
  <div class="card-body">
    <form class="" action="login.php" method="post">
      <div class="form-group">
        <label for="id">id number:</label>
        <input type="text" name="idNumber" value="<?=$id?>" class="form-control" placeholder="id number">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?=$password?>" class="form-control" placeholder="password">
      </div>
      <input type="submit" value="Login" class="form-control btn btn-success">

    </form>
  </div>
  <a href="index.php" class="mr-auto btn btn-outline-danger">go to homepage</a>
    <a href="signup.php" class="ml-auto"> Dont have Account?? Signup here</a>
</div>

  </div>

</div>
</section>

<script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

    <script>
  <!-- Menu Toggle Script -->
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    </script>
  </script>

</body>
</html>
