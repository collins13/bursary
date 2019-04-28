<?php
include 'config/config.php';

$email = ((isset($_POST['email']))?$_POST['email']:'');
$email = trim($email);
$password = ((isset($_POST['password']))?$_POST['password']:'');
$password = trim($password);
$errors = array();
$hashed = password_hash($password, PASSWORD_DEFAULT);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin login</title>
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
border-radius: 5px;
box-shadow: 7px, 7px, 15px rgba(0,0,0,0.6);
margin: 8% auto;
padding: 15px;
background-color: #fff;
opacity: 0.8;
 filter: alpha(opacity=50);
}
</style>
  </head>

  <body>

<style media="screen">
  #sidebar-wrapper{
    margin-top:32%;
    height: auto;
  }
  .card{
    border-radius: 5px solid black;

  }
</style>
<!--row-->
<section>
<div class="container">
  <div id="login-form">
    <div>
<?php
if ($_POST) {
  if (empty($email) || empty($password)) {
    $errors[] = 'email number and password are required!!';
  }

  if (strlen($password) < 6) {
  $errors[] = 'password must be atleast 6 characters';
  }
  $query = $conn->query("SELECT * FROM admin WHERE email ='$email'");
    $user = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    if ($count < 1) {
      $errors[] = 'user email does\'t exist in our database';
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
  <h3 class="card-header bg-info text-center">ADMIN LOGIN</h3>
  <div class="card-body">
    <form class="" action="login.php" method="post">
      <div class="form-group">
        <label for="id">email:</label>
        <input type="text" name="email" value="<?=$email?>" class="form-control" placeholder="enter email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?=$password?>" class="form-control" placeholder="password">
      </div>
      <input type="submit" value="Login" class="form-control btn btn-primary">

    </form>
  </div>
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
