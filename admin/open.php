<?php include 'includes/header.php'; ?>
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
<?php
include 'close.php';
$year = ((isset($_POST['year']))?$_POST['year']:'');
$query = $conn->query("SELECT * FROM users");
$user = mysqli_fetch_assoc($query);

$query1 = $conn->query("SELECT * FROM apllication");
$user1 = mysqli_fetch_assoc($query1);

$date = $user1['date'];
$email = $user['email'];
$massage = 'bursary application in now open you can log in to your account and apply';


if ($_POST) {
  if (empty($year)) {?>
    <script type="text/javascript">
  alert('all fields are required');
    </script>
    <?php
  }
if (!empty($year)) {
  $sql = $conn->query("INSERT INTO apllication(academic, date) VALUES('$year', now())");

  $update = $conn->query("UPDATE apllication SET open = 1 WHERE academic = '$year'");


  if ($sql && $update) {
    $to = $email; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Website Contact Form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:Message:\n$massage";
    $headers = "From: countybursary.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: countybursary.com";
    mail($to,$email_subject,$email_body,$headers);

    ?>
    <script type="text/javascript">
    alert('apllication opened successfully, all users have been notified');

    window.location.replace('open.php');
    </script>
    <?php

  }

}

}
 ?>
<div class="container-fluid">
      <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="card">
  <div class="card-header bg-primary text-uppercase">
    manage application
  </div>
  <div class="card-body">
    <div id="open-detail">
<form class="" action="open.php" method="post">
  <div class="row">
    <div class="form-group col-md-8">
      <label for="academic">financial Year:</label>
       <input type="text" name="year" value="<?=$year?>" class="form-control" placeholder=" enter academic year. eg ....2019/2020">
    </div>
    <div class="form-group col-md-4" style="margin-top:32px;">
      <input type="submit" value="Open apllication" class="btn btn-outline-warning">
    </div>
  </div>


</form>

              </div>
  </div>
  <?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $del = $conn->query("DELETE FROM apllication WHERE id ='$id'");
  if ($del) {?>
<script type="text/javascript">
  alert('application closed successfully');
  window.location.replace('open.php');
</script>
    <?php
  }
}
   ?>

  <div class="card-footer text-muted">
    <?php $tab = $conn->query("SELECT * FROM apllication"); ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">financial year</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($app = mysqli_fetch_assoc($tab)): ?>
    <tr>
      <th scope="row">1</th>
      <td><?=$app['academic'];?></td>
      <td>
        <a href="open.php?id=<?=$app['id']?>" class="btn btn-outline-warning">Close application</a>
      </td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>
  </div>
</div>
<!-- Modal 1 -->
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
