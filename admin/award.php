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

        $query = $conn->query("SELECT f_name FROM apply WHERE active ='1'");


        $f_name = ((isset($_POST['f_name'])?$_POST['f_name']:''));

        $result = $conn->query("SELECT * FROM apply WHERE f_name ='$f_name'");
         $count = mysqli_fetch_assoc($result);
         $l_name = ((isset($_POST['l_name']))?$_POST['l_name']:$count['l_name']);
         $id = ((isset($_POST['id_no']))?$_POST['id_no']:$count['id_no']);
         $email = ((isset($_POST['email']))?$_POST['email']:$count['email']);
         $phone = ((isset($_POST['phone']))?$_POST['phone']:$count['phone']);
         $age = ((isset($_POST['age']))?$_POST['age']:'');
         $dob = ((isset($_POST['dob']))?$_POST['dob']:'');
         $gender = ((isset($_POST['gender']))?$_POST['gender']:$count['gender']);
         $social = ((isset($_POST['social']))?$_POST['social']:$count['social']);
         $parent = ((isset($_POST['parent']))?$_POST['parent']:$count['parent']);
         $s_county = ((isset($_POST['s_county']))?$_POST['s_county']:$count['s_county']);
         $ward = ((isset($_POST['ward']))?$_POST['ward']:$count['ward']);
         $village = ((isset($_POST['village']))?$_POST['village']:'');
         $ni = ((isset($_POST['ni']))?$_POST['ni']:$count['institution']);
         $adm = ((isset($_POST['adm']))?$_POST['adm']:$count['adm']);
         $cn = ((isset($_POST['cn']))?$_POST['cn']:$count['cn']);
         $yos = ((isset($_POST['yos']))?$_POST['yos']:'');
         $amount = ((isset($_POST['amount']))?$_POST['amount']:$count['amount']);
         $a_amount = ((isset($_POST['a_amount']))?$_POST['a_amount']:'');
         $date = ((isset($_POST['date']))?$_POST['date']:'');
         $errors = array();
         $success = '';
         $query = $conn->query("SELECT * FROM apply");
         $is_orphan = true;
         $count = mysqli_fetch_assoc($query);

                 /*here*/
               $credit_score = 0;
         if ($gender == 'male') {
           // code...
           $credit_score += 0.2;
           if ($social == 'rich') {
            $credit_score += 0.2;
          }
          if($social == 'middle') {
            $credit_score += 0.3;
          }
          if ($social == 'poor') {
            $credit_score += 0.3;
          }
          if ($parent =='single') {
            $credit_score += 0.3;
          }

          if ($parent == 'both') {
            $credit_score += 0.2;
          }
          if($parent == 'ophan') {
            $credit_score += 0.5;
          }
         }elseif ($gender == 'female') {
           // code...
           $credit_score += 0.3;

           if ($social == 'rich') {
            $credit_score += 0.1;
          }
          if($social == 'middle') {
            $credit_score += 0.2;
          }
          if ($social == 'poor') {
            $credit_score += 0.3;
          }
          if ($parent =='single') {
            $credit_score += 0.3;
          }
          if ($parent == 'both') {
            $credit_score += 0.2;
          }
          if($parent =='ophan') {
            $credit_score += 0.5;
           }
         }else {
           $credit_score = 0.3;
         }
         /*end*/
         $fund = 50000 * $credit_score;
                 /*end*/

         ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="card">
  <div class="card-header bg-primary text-uppercase">
    award bursary
  </div>
  <div class="card-body">
    <div id="award-detail">
<?php

if (isset($_POST['submit'])) {
  $award = $conn->query("INSERT INTO award(f_name, l_name, email, id_no, phone, gender, s_county, ward, institution, adm, amount, date)
                                       VALUES('$f_name', '$l_name', '$email', '$id', '$phone', '$gender', '$s_county', '$ward', '$ni','$adm', '$a_amount', now())");

  $update = $conn->query("UPDATE apply SET active = 0 WHERE f_name ='$f_name'");

if ($award && $update) {
  ?>
  <script type="text/javascript">
  alert('bursary awarded successfully');
  window.location.replace('award.php');
  </script>

  <?php

  }
}
 ?>
      <form action="award.php" method="post">
  <div class="row" style="margin-bottom:20px;">
    <div class="col-md-9">
      <select name="f_name" class="form-control">
        <option value="<?=(($f_name == '')?' selected':'');?>">select applicant name</option>
        <?php while($issue = mysqli_fetch_assoc($query)) : ?>
        <option value="<?=$issue['f_name']?>"<?=(($f_name == $issue['f_name'])?' selected':'')?>><?=$issue['f_name']?></option>
      <?php endwhile; ?>
      </select>
    </div>
    <div class="col-md-3">
         <input type="submit" class="btn btn-primary text-right" value="search">
     </div>
  </div>
  <?php if ($_POST):?>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="village">first name:</label>
      <input type="text" class="form-control" id="f_name" name="f_name" placeholder="first name" value="<?=$f_name;?>" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="village">last name:</label>
      <input type="text" class="form-control" id="l_name" name="l_name" value="<?=$l_name;?>" placeholder="last Name" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="village">Email:</label>
      <input type="email" class="form-control" id="email" name="email" value="<?=$email;?>" placeholder="Student Email" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="village">Id No:</label>
        <input type="int" class="form-control" name="id_no" id="id_no" aria-describedby="id Help" value="<?=$id;?>" disabled placeholder="Enter id number">
    </div>
    <div class="form-group col-md-6">
      <label for="village">phone No:</label>
          <input type="int" class="form-control" name="phone" id="phone" aria-describedby="phone Help" value="<?=$phone;?>" disabled disabled placeholder="Enter phone">
    </div>
    <div class="form-group col-md-6">
      <label for="village">gender:</label>
      <input type="text" class="form-control" name="gender" id="gender" aria-describedby="gender Help" value="<?=$gender?>" disabled placeholder="Enter gender">
    </div>
    <div class="form-group col-md-6">
      <label for="village">sub county:</label>
      <input type="text" class="form-control" name="s_county" id="s_county" aria-describedby="county Help" value="<?=$s_county?>" disabled placeholder="Enter sub county">
    </div>
    <div class="form-group col-md-6">
      <label for="village">ward:</label>
       <input type="text" class="form-control" name="ward" id="ward" aria-describedby="ward Help" value="<?=$ward;?>" disabled placeholder="Enter ward">
    </div>
    <div class="form-group col-md-6">
      <label for="village">institution:</label>
    <input type="text" class="form-control" name="ni" id="ni" aria-describedby="name Help" value="<?=$ni?>" disabled placeholder="Enter institution name">
    </div>
    <div class="form-group col-md-6">
      <label for="village">Admision No:</label>
      <input type="text" class="form-control" name="adm" id="adm" aria-describedby="village Help" value="<?=$adm?>" disabled placeholder="Enter admission number">
    </div>
    <div class="form-group col-md-6">
      <label for="village">Amount applied:</label>
      <input type="text" class="form-control" name="amount" id="amount" aria-describedby="amount Help" value="<?=$amount?>" disabled placeholder="Enter amount">
    </div>
    <div class="form-group col-md-6">
      <label for="village">Amount awarding:</label>
      <input type="text" class="form-control" name="a_amount" id="a_amount" readonly aria-describedby="amount Help" value="<?=$fund?>" placeholder="Enter amount awarding">
    </div>
    <!--<div class="form-group col-md-6">
      <label for="village">date awarded:</label>
      <input type="date" class="form-control" name="date" id="date" aria-describedby="amount Help" value="<?=$date?>" placeholder="enter date">
    </div>
  </div>-->
  <input type="submit" name="submit" value="award applicant" class="form-control btn btn-success">

  <?php endif; ?>
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
