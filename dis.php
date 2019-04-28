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
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Full Name</th>
                  <th scope="col">Id no</th>
                  <th scope="col">institution</th>
                  <th scope="col">Adm No.</th>
                  <th scope="col">amount awarded</th>
                  <th scope="col">date awarded</th>
                  <th scope="col">status</th>
                </tr>
              </thead>
              <tbody>
              <?php while($award = mysqli_fetch_assoc($select)): ?>
                <tr>
                  <th scope="row"><?=$award['id']?></th>
                  <td><?=$award['f_name'].' '.$award['l_name'];?></td>
                  <td><?=$award['id_no']?></td>
                  <td><?=$award['institution'];?></td>
                  <td><?=$award['adm'];?></td>
                  <td><?=$award['amount'];?></td>
                  <td><?=$award['date'];?></td>
                  <td>awarded</td>
                </tr>
                      <?php endwhile; ?>
                <tr>
              </tbody>
       </table>
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
