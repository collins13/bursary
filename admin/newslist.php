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
<div class="container-fluid">
      <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <?php
        $sql = "SELECT * FROM newsletter ORDER BY id DESC";

        $result = $conn->query($sql);

         ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="card">
  <div class="card-header bg-primary text-uppercase">
    applied students
  </div>
  <div class="card-body">
    <table class="table">
       <thead>

        <tr>
          <th>#</th>
          <th scope="col">Subject</th>
          <th scope="col">Sender Email</th>
          <th scope="col">Sender Name</th>
          <th scope="col">Created on</th>
          <th scope="col">status</th>
          <th scope="col">Action</th>
        </tr>
       </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
       <tr>
       <th scope="row"><?=$row['id']; ?></th>
       <td><?php echo$row['subject']; ?></td>
       <td><?php echo$row['sender_email']; ?></td>
       <td><?php echo$row['sender_name']; ?></td>
       <td><?php echo$row['time']; ?></td>
       <td><?php echo$row['active']; ?></td>
       <?php
     if (isset($_GET['id'])) {
       $id = $_GET['id'];

       $del = $conn->query("DELETE FROM newsletter WHERE id ='$id'");
       if ($del) {?>
     <script type="text/javascript">
       alert('deleted successfully');
       window.location.replace('newslist.php');
     </script>
         <?php
       }
     }
        ?>
       <td>
         <a href="newslist.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm">delete</a>|
         <a href="send.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success btn-sm">Send</a>
       </td>
     </tr>
        <?php endwhile; ?>
        </tbody>
   </table>

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


</body>
</html>
