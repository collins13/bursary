<?php include 'includes/header.php'; ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <?php $sql = $conn->query("SELECT * FROM users WHERE id ='$_SESSION[SBUser];'") ?>
    <div class="card">
  <div class="card-header bg-success">
    Personal details
  </div>
  <div class="card-body">
    <center>
    <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="images/default-avatar_s.gif" name="aboutme" width="140" height="140" class="img-circle"></a>
      <?php while($user = mysqli_fetch_assoc($sql)) : ?>
    <h3>Full Name: <?=$user['f_name'].' '.$user['s_name']?></h3>
    <h3 class="small">Email: <?=$user['email']?></h3>
    <h3 class="small">id Number: <?=$user['id_no']?></h3>
    <?php endwhile; ?>
  </center>


  </div>
</div>
    <!-- Modal -->

</div>
                    <script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
                    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
