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
<?php $sql = $conn->query("SELECT * FROM apply WHERE user_id='$_SESSION[SBUser]'"); ?>
  <!--end row-->
  <div class="card">
    <div class="card-header bg-warning">
           Bursary application details
         </div>
         <div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Id Number</th>
      <th scope="col">Date applied</th>
      <th scope="col">Amount Apllied</th>
      <th scope="col">Amount Awarded</th>
      <th scope="col">approval</th>
    </tr>
  </thead>
  <tbody>
    <?php while($apply=mysqli_fetch_assoc($sql)) : ?>
    <tr>
      <th scope="row">1</th>
      <td><?=$apply['f_name']?></td>
      <td><?=$apply['l_name']?></td>
      <td><?=$apply['id_no']?></td>
      <td><?=$apply['date_applied']?></td>
      <td><?=$apply['amount']?></td>
      <td>0.00</td>
      <td><?=(($apply['active'] == 1)?'Activated':'Not activated');?></td>

    </tr>
  <?php endwhile; ?>
  </tbody>
</table>
            <div class="card-footer text-muted">
              <a href="home.php" class="btn btn-outline-danger">Go Back</a>
            </div>
         </div>
       </div>

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
