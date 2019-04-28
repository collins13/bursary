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
$id = $_GET['id'];

$sql = "SELECT * FROM users  ORDER BY id DESC";
$result = $conn->query($sql);

$emailCount = 0;
$nameCount = 0;
$unsubscribeCount = 0
?>
<div class="container-fluid">
      <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <?php
         $sql = "SELECT * FROM users ORDER BY id DESC";
          $result = $conn->query($sql);

          ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="card">
  <div class="card-header bg-primary text-uppercase">
    applied students
  </div>
  <div class="card-body">
    <div id="list-users">
      <input type="checkbox" name="selectall" id="selectall">SelectAll<br><br>
      <form action="send.php?nid=<?=$id;?>" method="POST">
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
      <div class="form-group" ?>
        <label class="checkbox-inline">
        <input type="checkbox" name="email'.$emailCount++.'" value="<?php echo $row['email']; ?>"/>(<?php echo $row['email'];  ?>)
      </label>
      </div>
      <div class="form-group">
        <input type="hidden" name="name'.$nameCount++.'" value="<?php echo $row['name']; ?>"/>
      </div>
      <div class="form-group">
        <input type="hidden" name="unsubscribe'.$unsubscribeCount++.'" value="<?php  echo $row['id']; ?>"/>
      </div>
      <?php endwhile; ?>
      <input type="submit" name="send" value="Send" class="btn btn-primary">
    </form>
    </div>
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

        <script type="text/javascript">
        $(document).ready(function(){
        $('#selectall').click(function(){
          $(this).parents('#list-users').find(':checkbox').attr('checked',this.checked);
        });
        });

        </script>


</body>
</html>
<?php
error_reporting(0);

if (isset($_POST['send'])) {
    $id =$_GET['nid'];

    $sql = "SELECT * FROM newsletter WHERE id='$id' LIMIT 1";
    $result = $conn->query($sql);

    $row = mysqli_fetch_assoc($result);

   for ($x=0; $x < count($_POST); $x++) {

     $to = $_POST["email$x"];
     $unsubscribeid = $_POST["unsubscribeid$x"];
     $body = $content.'<img src="hhtp://localhost/newslatter/trackemail.php?eid='.$unsubscribeid.'">';

     $headers = "From: ".$semail."\r\n ";
     $headers .= "Reply-To: ".$semail." \r\n ";
     $headers .= "MIME-Version 1.0:" . "\r\n";
     $headers .= "Content-Type:text/html;charset=iso-8859-1" . "\r\n";
     $retval = mail($to, $subject, $body, $headers);

     header('Location:newslist.php');

     if( $retval == true ) {?>
       <script type="text/javascript">
         alert('sent successfully');
         window.location.replace('newslist.php');
       </script>

       <?php
     }else {
        echo "Message could not be sent...";
     }

   }

}

 ?>
