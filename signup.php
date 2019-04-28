<?php
include 'config/config.php';
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


</style>
</head>
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
$f_name = ((isset($_POST['f_name']))?$_POST['f_name']:'');
$l_name = ((isset($_POST['l_name']))?$_POST['l_name']:'');
$m_name = ((isset($_POST['m_name']))?$_POST['m_name']:'');
$id = ((isset($_POST['idNumber']))?$_POST['idNumber']:'');
$id = trim($id);
$email = ((isset($_POST['email']))?$_POST['email']:'');
$password = ((isset($_POST['password']))?$_POST['password']:'');
$errors = array();
if ($_POST) {
  $emailQuery = $conn->query("SELECT * FROM users WHERE email ='$email'");
  $emailCount = mysqli_num_rows($emailQuery);
  if ($emailCount != 0) {
  $errors[] = 'That Email already exist in the database';
  }
 $required = array('f_name', 'l_name', 'm_name', 'idNumber', 'email', 'password');
 foreach ($required as $f) {
  if (empty($_POST[$f])) {
  $errors[] = 'You need to fill all fields.';
  break;
  }
 }
 if (strlen($password) < 6) {
  $errors[] = 'password must be more than six characters.';
 }
 if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
   $errors[] = 'Your Email is not Valid';
 }
 if (!empty($errors)) {
   echo display_errors($errors);
 }else {
   $hashed = password_hash($password,PASSWORD_DEFAULT);
   $insert = $conn->query("INSERT INTO users(f_name, s_name, m_name, id_no, email, password)
                             VALUES('$f_name', '$l_name', '$m_name', '$id', '$email', '$hashed')");
if ($insert) {
?>
<script type="text/javascript">
alert("success!! account has been created you can now login");
window.location.replace('index.php');
</script>
<?php
}
    }
  }
 ?>
    </div>
<div class="card">
  <h3 class="card-header bg-info text-uppercase">signup</h3>
  <div class="card-body">
    <form class="" action="signup.php" method="post">
      <div class="form-group">
        <label for="id">first Name:</label>
        <input type="text" name="f_name" value="<?=$f_name?>" class="form-control" placeholder="first name">
      </div>
      <div class="form-group">
        <label for="id">last name:</label>
        <input type="text" name="l_name" value="<?=$l_name?>" class="form-control" placeholder="last name">
      </div>
      <div class="form-group">
        <label for="id">other name:</label>
        <input type="text" name="m_name" value="<?=$m_name?>" class="form-control" placeholder="other names">
      </div>
      <div class="form-group">
        <label for="id">id number:</label>
        <input type="text" name="idNumber" value="<?=$id?>" class="form-control" placeholder="id number">
      </div>
      <div class="form-group">
        <label for="id">email:</label>
        <input type="email" name="email" value="<?=$email?>" class="form-control" placeholder="email adress">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?=$password?>" class="form-control" placeholder="password">
      </div>
      <input type="submit" value="Login" class="form-control btn btn-info">

    </form>
  </div>
  <a href="index.php" class="mr-auto btn btn-outline-danger">go to homepage</a>
    <a href="login.php" class="ml-auto"> have an account?? login here</a>
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
