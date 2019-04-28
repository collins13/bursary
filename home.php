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

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="row">

            <div class="col-md-4">
              <div class="card bg-primary" style="width: 18rem;">
                 <div class="card-header" style="color:white;">
                   <i class="fa fa-user fa-2x"></i>
                      Personal details
                 </div>
                 <a href="accout.php" class="card-body" style="list-style: none;">
                   <h5 class="card-title" style="color:white;">View info</h5>
                 </a>
            </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-warning" style="width: 18rem;">
                 <div class="card-header" style="color:white;">
                   <i class="fa fa-info-circle fa-2x"></i>
                   Apply bursary
                 </div>
                 <a href="apply.php" class="card-body" style="list-style: none;">
                   <h5 class="card-title" style="color:white;">get the service</h5>
                 </a>
             </div>
            </div>

            <div class="col-md-4">
              <div class="card bg-success" style="width: 18rem;">
                 <div class="card-header" style="color:white;">
                    <i class="fa fa-info-circle fa-2x"></i>
                   Disbursement details
                 </div>
                 <a href="dis.php" class="card-body" style="list-style: none;">
                   <h5 class="card-title" style="color:white;">get the service</h5>
                 </a>
            </div>

            </div>

            <div class="col-md-4">
              <div class="card bg-danger" style="width: 18rem; margin-top:20px;">
                 <div class="card-header" style="color:white;">
                     <i class="fa fa-info-circle fa-2x"></i>
                   Application Info
                 </div>
                 <a href="app_info.php" class="card-body" style="list-style: none;">
                   <h5 class="card-title" style="color:white;">view the service</h5>
                 </a>
            </div>

            </div>

            <div class="col-md-4">
              <div class="card bg-primary" style="width: 18rem; margin-top:20px;">
                 <div class="card-header" style="color:white;">
                   messages
                 </div>
                 <a href="#" class="card-body" style="list-style: none;">
                   <h5 class="card-title" style="color:white;">Special title treatment</h5>
                 </a>
            </div>

            </div>


          </div>

  <!--end row-->
          <!--<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>-->

          <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
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

</body>
</html>
