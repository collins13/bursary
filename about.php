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
<?php $select = $conn->query("SELECT * FROM award WHERE  f_name ='$user_data[f_name]'") ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <!-- Page Content -->
          <div class="container">

            <!-- Page Heading/Breadcrumbs -->

            <ol class="breadcrumb bg-info">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active">About</li>
            </ol>

            <!-- Intro Content -->
            <div class="row">
              <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="images/text-slider-1.png" alt="">
              </div>
              <div class="col-lg-6">
                <h2>About Fuzzy bursary processing</h2><hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
              </div>
            </div>
            <!-- /.row -->

            <!-- Team Members -->
            <div class="card">
              <div class="card-header bg-info">
                <h2>Our Team</h2>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3 col-sm-3 mb-4 mx-auto">
                    <div class="card h-100 text-center">
                      <img class="card-img-top" src="images/Peter 20181117_180857.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Owner</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#">peterjuma@hotmail.com</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-3 mb-4 mx-auto">
                    <div class="card h-100 text-center">
                      <img class="card-img-top" src="images/IMG_20160909_201054.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Developer</h6>
                        <p class="card-text">web and mobile apps developer who build mahaba recipes and maintaining it.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#">rashidcollins16@gmail.com</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4 mx-auto">
                    <div class="card h-100 text-center">
                      <img class="card-img-top" src="images/Baghali-polo.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                      </div>
                      <div class="card-footer">
                        <a href="#">name@example.com</a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- /.row -->
              </div>

          <!-- /.container -->
        </main>
      </div>
    </div>
    <script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<?php include 'includes/footer.php'; ?>
</body>
</html>
