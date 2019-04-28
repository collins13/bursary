<?php include 'includes/header.php'; ?>
<style media="screen">
main{
  margin-top: 70px;
}
</style>
<div class="container-fluid">
      <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="card">
                 <div class="card-header bg-warning">
                   Bursary application form
                 </div>
                 <div class="card-body">
                   <div id="apply-form">
                     <?php
                     include 'scripts/apply.inc.php';
                     if ($_POST) {
                       if (empty($f_name) || empty($l_name) || empty($email)|| empty($id)
                        || empty($phone)
                        || empty($age) || empty($dob)
                        || empty($gender) || empty($parent) || empty($social) ||  empty($s_county) || empty($ward) || empty($village)
                        || empty($ni) || empty($adm) || empty($cn) || empty($yos) || empty($amount)) {
                         $errors[] = 'all fileds are required!!';
                       }
                       $query = $conn->query("SELECT * FROM apply WHERE id_no ='$id'");
                         $user = mysqli_fetch_assoc($query);
                         $count = mysqli_num_rows($query);
                         if ($count > 1) {
                           $errors[] = 'You already applied for the bursary you cannot apply more than once';
                         }

                       if (!empty($errors)) {
                       echo  display_errors($errors);
                     }else {
                       $insert = $conn->query("INSERT INTO
                         apply(f_name, l_name, email, id_no, phone,age,dob,gender,social,parent,s_county,ward,village,institution,
                           adm,cn,yos,amount, user_id)
                         VALUES('$f_name','$l_name', '$email', '$id','$phone','$age','$dob','$gender','$social','$parent','$s_county',
                           '$ward','$village','$ni','$adm','$cn','$yos','$amount', '$_SESSION[SBUser]')");

                           if ($insert) {
                             ?>
                             <script type="text/javascript">
                             alert('application success!')

                             </script>
                             <?php
                           }
                       }
                     }
                      ?>
                     <h3 class="text-center">COUNTY BURSARY APPLICATION FORM</h3>
                     <div class="alert alert-primary" role="alert">
                        complete the form below, u can also print it to fill offline and uplod it
                    </div>
                     <hr>
                     <?php
                      $sql = $conn->query("SELECT * FROM apply WHERE user_id='$_SESSION[SBUser]'");
                      $sql1 = $conn->query("SELECT * FROM apllication");
                     $user1 = mysqli_fetch_assoc($sql1);
                     ?>
                     <?php if ($user1['open']  == 1): ?>
                       <h4>Financial year <?=$user1['academic']?></h4><hr>
                     <form class="" action="apply.php" method="post">
                       <div class="row">
                            <div class="form-group col-md-5">
                             <label for="exampleInputEmail1">First Name:</label>
                             <input type="text" class="form-control" name="f_name" id="f_name" aria-describedby="name Help" value="<?=$f_name?>" placeholder="Enter first name">
                           </div>
                           <div class="form-group col-md-5">
                            <label for="l_name">Last Name:</label>
                            <input type="text" class="form-control" name="l_name" id="l_name" aria-describedby="name Help" value=<?=$l_name;?>"" placeholder="Enter last name">
                          </div>
                          <div class="form-group col-md-5">
                           <label for="email">Email:</label>
                           <input type="text" class="form-control" name="email" id="email" aria-describedby="email Help" value="<?=$email?>" placeholder="Enter Email">
                         </div>
                         <div class="form-group col-md-5">
                          <label for="phone">Id number:</label>
                          <input type="int" class="form-control" name="id_no" id="id_no" aria-describedby="id Help" value="<?=$id;?>" placeholder="Enter id number">
                        </div>
                         <div class="form-group col-md-5">
                          <label for="phone">Phone number:</label>
                          <input type="int" class="form-control" name="phone" id="phone" aria-describedby="phone Help" value="<?=$phone;?>" placeholder="Enter phone">
                        </div>
                        <div class="form-group col-md-4">
                         <label for="age">Age:</label>
                         <input type="number" class="form-control" name="age" id="age" aria-describedby="age Help" value="<?=$age?>" placeholder="Enter your age">
                       </div>
                       <div class="form-group col-md-3">
                        <label for="date">Date of birth:</label>
                        <input type="date" class="form-control" name="dob" id="dob" aria-describedby="date Help" value="<?=$dob?>" placeholder="Enter your date">
                      </div>

                      <div class="form-group col-md-3">
                       <label for="checkbox">gender:</label>
                       <select class="form-control" name="gender" id="gender" aria-describedby="gender Help">
                         <option value="<?=(($gender == '')?' selected':'');?>">select gender</option>
                         <option value="male<?=(($gender == 'male')?' selected':'');?>">male</option>
                         <option value="female<?=(($gender == 'female')?' selected':'');?>">female</option>
                       </select>
                     </div>
                     <div class="form-group col-md-3">
                      <label for="checkbox">Parent status:</label>
                      <select class="form-control" name="parent" id="parent" aria-describedby="gender Help">
                        <option value="<?=(($parent == '')?' selected':'');?>">select parent status</option>
                        <option value="single<?=(($parent == 'single')?' selected':'');?>">single parent</option>
                        <option value="both<?=(($parent == 'both')?' selected':'');?>">both parent</option>
                        <option value="ophan<?=(($parent == 'ophan')?' selected':'');?>">orphan</option>
                      </select>
                    </div>
                      <div class="form-group col-md-3">
                       <label for="checkbox">family status:</label>
                       <select class="form-control" name="social" id="social" aria-describedby="gender Help">
                         <option value="<?=(($social == '')?' selected':'');?>">select family status</option>
                         <option value="rich<?=(($social == 'rich')?' selected':'');?>">rich</option>
                         <option value="middle<?=(($social == 'middle')?' selected':'');?>">middle class</option>
                         <option value="poor<?=(($social == 'poor')?' selected':'');?>">poor</option>
                       </select>
                    </div>
                     <div class="form-group col-md-5">
                      <label for="sbc">Subcounty:</label>
                      <input type="text" class="form-control" name="s_county" id="s_county" aria-describedby="county Help" value="<?=$s_county?>" placeholder="Enter sub county">
                    </div>
                    <div class="form-group col-md-5">
                     <label for="ward">Ward:</label>
                     <input type="text" class="form-control" name="ward" id="ward" aria-describedby="ward Help" value="<?=$ward;?>" placeholder="Enter ward">
                   </div>
                   <div class="form-group col-md-5">
                    <label for="village">Village:</label>
                    <input type="text" class="form-control" name="village" id="village" aria-describedby="village Help" value="<?=$village;?>" placeholder="Enter village">
                  </div>
                  <div class="form-group col-md-5">
                   <label for="ni">Name of academic institution:</label>
                   <input type="text" class="form-control" name="ni" id="ni" aria-describedby="name Help" value="<?=$ni?>" placeholder="Enter institution name">
                    </div>
                    <div class="form-group col-md-5">
                    <label for="village">Student admission number:</label>
                    <input type="text" class="form-control" name="adm" id="adm" aria-describedby="village Help" value="<?=$adm?>" placeholder="Enter admission number">
                  </div>
                  <div class="form-group col-md-5">
                   <label for="village">Course Name(applicable for college/university):</label>
                   <input type="text" class="form-control" name="cn" id="cn" aria-describedby="course Help" value="<?=$cn?>" placeholder="Enter course">
                 </div>
                <!-- <div class="form-group col-md-3">
                  <label for="level">Level of study:</label>
                 <p>CERTIFICATE:<input type="checkbox" class="form-control" name="level" id="level" value="<?=$level?>"></p>

                </div>
                <div class="form-group col-md-3">
                    <label for="yos">Year of study:</label>
                <p>DIPLOMA:<input type="checkbox" class="form-control" name="level1" id="level1" value="<?=$level1?>"></p>

               </div>
               <div class="form-group col-md-3">
                <label for="level">Level of study:</label>
               <p>DEGREE:<input type="checkbox" class="form-control" name="level2" id="level2" value="<?=$level2?>"></p>
             </div>-->
              <div class="form-group col-md-5">
               <label for="yos">Year of study:</label>
               <input type="text" class="form-control" name="yos" id="yos" aria-describedby="yos Help" value="<?=$yos?>" placeholder="Enter year of study">
             </div>
             <div class="form-group col-md-5">
              <label for="village">Amount apply for:</label>
              <input type="text" class="form-control" name="amount" id="amount" aria-describedby="amount Help" value="<?=$amount?>" placeholder="Enter amount">
            </div>

         </div>

         <button type="submit" class="btn btn-success">Submit</button>
         </form>

         <h3>After application please attach the following details</h3>
         <ul>
           <li>photocopy of your national and school id card</li>
           <li>both parent national id photocopies</li>
           <li>your birth certificate photocopy</li>
              <li>your school fee structure</li>
         </ul>
     </div>
   <?php else: ?>
     <div class="alert alert-danger" role="alert">
        The application is not yet open You will be notified upon opening
    </div>
  <?php endif; ?>
<div class="card-footer text-muted">
  <a href="home.php" class="btn btn-outline-danger">Go Back</a>
   <button onclick="myFunction()" class="btn-primary btn-small">Print this form</button>
 </div>
                 </div>
               </div>

        </main>
      </div>
    </div>




<script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

<script>
function myFunction() {
  window.print();
}
</script>
