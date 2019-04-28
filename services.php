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
         <a href="index.html">Home</a>
       </li>
       <li class="breadcrumb-item active">Services</li>
     </ol>

     <!-- Image Header -->
     <img class="img-fluid rounded mb-4" src="images/services.png" alt="">

     <!-- Marketing Icons Section -->
     <div class="row">
       <div class="col-lg-4 mb-4">
         <div class="card h-100">
           <h4 class="card-header bg-info">Card Title</h4>
           <div class="card-body">
             <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
           </div>
           <div class="card-footer">
             <a href="#" class="btn btn-primary">Learn More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 mb-4">
         <div class="card h-100">
           <h4 class="card-header bg-info">Card Title</h4>
           <div class="card-body">
             <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
           </div>
           <div class="card-footer">
             <a href="#" class="btn btn-primary">Learn More</a>
           </div>
         </div>
       </div>
       <div class="col-lg-4 mb-4">
         <div class="card h-100">
           <h4 class="card-header bg-info">Card Title</h4>
           <div class="card-body">
             <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
           </div>
           <div class="card-footer">
             <a href="#" class="btn btn-primary">Learn More</a>
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
