
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
<!--row-->
<!--container-->
<div class="container-fluid">
      <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php
          $hashed = $user_data['password'];
          $old_password = ((isset($_POST['old_password']))?sanitize($_POST['old_password']):'');
          $old_password = trim($old_password);
          $password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
          $password = trim($password);
          $conferm = ((isset($_POST['conferm']))?sanitize($_POST['conferm']):'');
          $conferm = trim($conferm);
          $new_hashed = password_hash($password, PASSWORD_DEFAULT);
          $errors = array();
          $user_id = $user_data['id'];
           ?>

           <div id="login-form">
             <div>
          <?php
          if ($_POST) {
            //form validation
              if (empty($_POST['old_password']) || empty($_POST['password']) || empty($_POST['conferm'])) {
              $errors[] = "Please Fill all the required fields.";
            }
          //check password more than 6 characters
          /*if (strlen($password) < 6) {
          $errors[] = "your password must be more than six characters.";
          }*/
          //check new password matches conferm
          if ($password != $conferm) {
            $errors[] = "the  New password and conferm password does not match.";
          }
            if (!password_verify($old_password, $hashed)) {
            $errors = "Your old password does not match.";
            }
            //check for errors
            if (!empty($errors)) {
              echo display_errors($errors);
            }else {
            //change password
          $update =  $conn->query("UPDATE users SET password ='$new_hashed' WHERE id ='$user_id'");
            $_SESSION['success_flash'] = "Your password has been reset";

            if ($update) {?>
              <script type="text/javascript">
              alert('data deleted successfully,');

               window.location.replace("index.php");

              </script>
              <?php
            }
            }
          }
           ?>


             </div>
             <h2 class="text-center">Chanege Password</h2>
             <form action="change.php" method="POST">
               <div class="form-group">
                  <label for="old_password">old_password</label>
                 <input type="password" name="old_password" id="old_password" class="form-control" value="<?=$old_password;?>">
               </div>
               <div class="form-group">
                 <label for="password"> New Password</label>
                 <input type="password" name="password" id="password" class="form-control" value="<?=$password;?>">
               </div>
               <div class="form-group">
                 <label for="conferm">Conferm New Password</label>
                 <input type="password" name="conferm" id="conferm" class="form-control" value="<?=$conferm;?>">
               </div>
               <div class="form-group">
                 <a href="index.php" class="btn btn-danger">cancel</a>
                 <input type="submit" value="Change password" class="btn btn-success">
               </div>
             </form>
             <p class="text-right"><a href="../index.php" alt="home">Visit Site</a></p>
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
