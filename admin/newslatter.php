<?php include 'includes/header.php'; ?>
<style media="screen">
.ck-editor__editable {
  min-height: 300px;
}
</style>
<?php
if (isset($_POST['submit'])) {
$subject = $_POST['subject'];
$semail = $_POST['semail'];
$sname = $_POST['sname'];
$content = $_POST['content'];

if (empty($subject) || empty($semail) || empty($sname) || empty($content)) {
$error = "Please fill all the required fields needed";
}else {
$subject =  mysqli_real_escape_string($conn, $subject);
$semail =  mysqli_real_escape_string($conn, $semail);
$sname =  mysqli_real_escape_string($conn, $sname);
$content =  mysqli_real_escape_string($conn, $content);

$sql =  "INSERT INTO newsletter(subject, sender_email, sender_name, description, active)
                       VALUES('$subject', '$semail', '$sname', '$content', 'active')";

  $result = $conn->query($sql);

  if ($sql) {
  $success = "success";
  header("Location:newslatter.php");
  }
}
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

        <?php $query = $conn->query("SELECT * FROM apply") ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php
           $sql = "SELECT * FROM users ORDER BY id DESC";
            $result = $conn->query($sql);

            ?>
      <div class="card">
             <div class="card-header text-uppercase bg-info">
                Newslatter
             </div>
          <div class="card-body">
            <form action="newslatter.php" method="POST">
        <div id="mainsection">
          <h3>Create a Newsletter</h3><hr>
          <?php if(isset($error)){echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';} ?>
          <?php if(isset($success)){echo '<div class="alert alert-success" role="alert">'.$success.'</div>';} ?>

        <!--<div id="form-group">
        <label class="checkbox-inline">
         <input type="checkbox" name="blue" value="blue">Blue-template</br></br>
        </label>
      </div>
      <div id="form-group">
      <label class="checkbox-inline">
        <input type="checkbox" name="black" value="black">Black-template</br></br>
      </label>
    </div>-->
    <div class="row">
      <div class="form-group col-md-6">
         <label for="subject">Subject:</label>
        <input type="text" name="subject" class="form-control" id="subject">
      </div>
      <div class="form-group col-md-6">
        <label for="subject">Sender Email:</label>
        <input type="email" name="semail" class="form-control" id="semail">
      </div>
      <div class="form-group col-md-6">
        <label for="subject">Sender Full Name:</label>
        <input type="text" name="sname" class="form-control" id="sname">
      </div>
      </div>
      <div class="form-group">
            <label for="subject">Content:</label>
            <textarea name="content" id="content" class="form-control" rows="10" cols="10" ></textarea>
            <script>
            ClassicEditor
                .create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );
            </script>
      </div>
    </div>
      <div class="form-group">
        <label></label>
          <input type="submit" name="submit" class="btn btn-success">
    </div>
</div>
</form>

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
