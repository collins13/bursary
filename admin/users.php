
<?php
include 'includes/header.php';

if (!has_permission()) {
permision_error_redirect('index.php');
}

 ?>

<style media="screen">
  #sidebar-wrapper{
    margin-top:32%;
    height: auto;
  }
  .container-fluid{
    margin-top:5%;

  }
</style>

  <?php

  if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'delete') {
  $id = $_GET['id'];
  $sql = "DELETE FROM users WHERE id='$id' LIMIT 1";
  $delete = $conn->query($sql);

  if ($delete) {?>
    <script type="text/javascript">
    alert('data deleted successfully,');

     window.location.replace("index.php");

    </script>
    <?php
  }

}
  ?>
<!--row-->
<!--container-->
<div class="container-fluid">
      <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <?php $query = $conn->query("SELECT * FROM apply") ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php
           $sql = "SELECT * FROM admin ORDER BY id DESC";
            $result = $conn->query($sql);

            ?>
          <div class="card">
             <div class="card-header text-uppercase bg-info">
                Admins
             </div>
           <div class="card-body">
<?php
if (isset($_GET['delete'])) {
$user_id = sanitize($_GET['delete']);
$delete = $conn->query("DELETE FROM admin WHERE id ='$user_id'");
if ($delete) {?>
  <script type="text/javascript">
  alert("users deleted");
  window.location.replace('users.php');
  </script>
  <?php
}
}
if (isset($_GET['add'])) {
$name = ((isset($_POST['name']))?$_POST['name']:'');
$email = ((isset($_POST['email']))?sanitize($_POST['email']):'');
$password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
$conferm = ((isset($_POST['conferm']))?sanitize($_POST['conferm']):'');
$permision = ((isset($_POST['permision']))?sanitize($_POST['permision']):'');
$errors = array();
if ($_POST) {
  $emailQuery = $conn->query("SELECT * FROM admin WHERE email ='$email'");
  $emailCount = mysqli_num_rows($emailQuery);
  if ($emailCount != 0) {
  $errors[] = 'That Email already exist in the database';
  }
 $required = array('name', 'email', 'password', 'conferm', 'permision');
 foreach ($required as $f) {
  if (empty($_POST[$f])) {
  $errors[] = 'You need to fill all fields.';
  break;
  }
 }
 if (strlen($password) < 6) {
  $errors[] = 'password must be more than six characters.';
 }
 if ($password != $conferm) {
  $errors[] = 'Your password does not match';
 }
 if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
   $errors[] = 'Your Email is not Valid';
 }
 if (!empty($errors)) {
   echo display_errors($errors);
 }else {
   $hashed = password_hash($password,PASSWORD_DEFAULT);
   $insert = $conn->query("INSERT INTO admin(f_name, email, password, permisions)
                             VALUES('$name', '$email', '$hashed', '$permision')");
if ($insert) {
?>
<script type="text/javascript">
alert("success!! user has been added");
window.location.replace('users.php');
</script>
<?php
}
    }
}
?>
<div class="jumbotron jumbotron-fluid">
<div class="container">
  <h1 class="display-4">Add New User</h1>
</div>
</div>

<form role="form" action="users.php?add=1" method="POST">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="Name">Full Name:</label>
      <input type="text" name="name" id="name" class="form-control" value="<?=$name;?>">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control" value="<?=$email;?>">
    </div>
    <div class="form-group col-md-6">
      <label for="password">password:</label>
      <input type="password" name="password" id="password" class="form-control" value="<?=$password;?>">
    </div>
    <div class="form-group col-md-6">
      <label for="password">Conferm Password:</label>
      <input type="password" name="conferm" id="conferm" class="form-control" value="<?=$conferm;?>">
    </div>
    <div class="form-group col-md-6">
        <label for="permision">permision:</label>
      <select name="permision" id="permision" class="form-control">
      <option value="<?=(($permision == '')?' selected':'');?>"></option>
      <option value="editor<?=(($permision == 'editor')?' selected':'');?>">Editor</option>
      <option value="admin,editor<?=(($permision == 'admin,editor')?' selected':'');?>">admin</option>
    </select>
  </div>

</div>
<div class="form-group col-md-6 pull-right" style="margin-top:25px;">
  <a href="users.php" class="btn btn-danger">Cancel</a>
  <input type="submit" class="btn btn-primary" value="Add User">
</form>
<?php
}else {
$usersQuery = $conn->query("SELECT * FROM admin ORDER BY f_name DESC");
?>

<div class="container-fluid">
<div class="row content">

  <div class="col-sm-10">
    <h3 class="text-center">Admins</h3><hr><br>
      <a href="users.php?add=1" class="btn btn-info pull-right" id="add-product-button">Add New User</a><br><br>
    <table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Joined Date</th>
    <th scope="col">Last Login</th>
    <th scope="col">permision</th>
  </tr>
</thead>
<tbody>
  <?php while($users = mysqli_fetch_assoc($usersQuery)): ?>
  <tr>
    <th scope="row">1</th>
    <td><?=$users['f_name'];?></td>
    <td><?=$users['email'];?></td>
    <td><?=pretty_date($users['joined_date']);?></td>
    <td><?=(($users['last_login'] == '0000-00-00 00:00:00')?'never':pretty_date($users['last_login']));?></td>
    <td><?=$users['permisions'];?></td>
    <td>
     <?php if($users['id'] != $user_data['id']): ?>
        <a href="users.php?delete=<?=$users['id'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o">delete</i></a>
     <?php endif; ?>
    </td>
  </tr>
  <?php endwhile; ?>
</tbody>
</table>
  </div>
</div>
</div>
<?php } ?>
           </div>
</div>

        </main>
      </div>
    </div>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script>
      function detailsModal(id){
        var data = {"id" : id};
        $.ajax({
          url:'select.php',
          method:'post',
          data:data,
          success:function(data){

            $('body').append(data);
            $('#myModal').modal('toggle');

          },
          error:function(){
            alert('something went wrong');
          }
        });
      }
    </script>
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <section class="bg-dark" id="item">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
                  <h4>Social Networks</h4><hr>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item" style="color:white;">
                      <a href="https://twitter.com/collins_rashid">
                        <i class="fa fa-twitter fa-2x"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://web.facebook.com/collins.mkoji?ref=bookmarks">
                        <i class="fa fa-facebook-f fa-2x"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.linkedin.com/in/rashid-collins-1b2983120/">
                        <i class="fa fa-linkedin fa-2x"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://github.com/collins13">
                        <i class="fa fa-github fa-2x"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>


            </div>
            <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                <p class="m-0 text-center text-white">Copyright &copy; real time communication <?php echo date("Y-m-d"); ?></p>
              </div>
            </div>
          </div>
        </section>


</body>
</html>
