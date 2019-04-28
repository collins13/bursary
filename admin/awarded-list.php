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

        <?php $query = $conn->query("SELECT * FROM award") ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="card">
  <div class="card-header bg-primary text-uppercase">
    applied students
  </div>
  <div class="card-body">
    <div id="table-detail">

      <table class="table">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Full name</th>
        <th scope="col">Id Number</th>
        <th scope="col">phone</th>
        <th scope="col">gender</th>
        <th scope="col">sub county</th>
        <th scope="col">ward</th>
        <th scope="col">institution</th>
        <th scope="col">Amount awarded</th>
        <th scope="col">date awarded</th>
      </tr>
      </thead>
      <?php while($detail = mysqli_fetch_assoc($query)): ?>
      <tbody>
      <tr>
        <th scope="row">1</th>
        <td><?=$detail['f_name'].' '.$detail['f_name'];?></td>
        <td><?=$detail['id_no'];?></td>
        <td><?=$detail['phone'];?></td>
        <td><?=$detail['gender'];?></td>
        <td><?=$detail['s_county'];?></td>
        <td><?=$detail['ward'];?></td>
        <td><?=$detail['institution'];?></td>
        <td><?=$detail['amount'];?></td>
        <td><?=$detail['date'];?></td>
      </tr>
      </tbody>
      <?php endwhile; ?>
      </table>

     </div>
     <?php $count = mysqli_num_rows($query); ?>
     <div class="card-footer text-muted">
       <h5 class="btn btn-warning">total <?php echo $count;?></h5>
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
