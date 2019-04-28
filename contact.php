<?php include 'includes/header.php'; ?>
<style media="screen">
  #sidebar-wrapper{
    margin-top:32%;
    height: auto;
  }
  .container-fluid{
    margin-top:5%;

  }
  .ck-editor__editable {
    min-height: 300px;
  }
  .error{
    color: red;
    font-weight:bold;
    font-size: 15px;
  }
</style>
<?php

$error =array();
$name = ((isset($_POST['name']))?$_POST['name']:'');
$phone = ((isset($_POST['phone']))?$_POST['phone']:'');
$email = ((isset($_POST['email']))?$_POST['email']:'');
$message = ((isset($_POST['message']))?$_POST['message']:'');
  if ($_POST) {

  if (empty($name)) {
    $name_error ='name fild is required';
  }
  if (empty($phone)) {
    $phone_error ='name fild is required';
  }
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $email_error = 'is a valid email address';
} else {
  $email_error = 'is not a valid email address';
}
if (empty($message)) {
  $message_error ='this field cant be empty';
}
if (!empty($name) && !empty($phone) && !empty($message)) {
  $contactQuery = $conn->query("INSERT INTO contacts(name, phone, email, content)
                             VALUES('$name', '$phone', '$email', '$message')");
                             // Create the email and send the message


}

                               if ($contactQuery) {
                                 $to = 'rashidcollins16@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
                                 $email_subject = "Website Contact Form:  $name";
                                 $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
                                 $headers = "From:".$email; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
                                 $headers .= "Reply-To: $email";
                                 $retval = mail($to,$email_subject,$email_body,$headers);

                                          if( $retval == true ) {
                                             echo "Message sent successfully...";
                                          }else {
                                             echo "Message could not be sent...";
                                          }
                                          ?>
                                          <script type="text/javascript">
                                            alert('message sent successfully');
                                            window.location.replace('index.php');
                                          </script>
                                          <?php
                               }
  }
 ?>
<!--row-->
<!--container-->
<div class="container-fluid">
      <div class="row">
        <?php include 'includes/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="row">



          </div>

  <!--end row-->


  <div class="card">
<div class="card-header bg-info text-uppercase">
Contact us
</div>
<div class="card-body">
  <h3 class="card-title">Send us a Message</h3>
  <form name="sentMessage" id="contactForm" method="POST" action="contact.php" novalidate>
    <div class="control-group form-group col-md-8">
      <div class="controls">
        <label>Full Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="<?=$name;?>" required data-validation-required-message="Please enter your name.">
        <p class="help-block"></p>
      </div>
    </div>
    <div class="control-group form-group col-md-8">
      <div class="controls">
        <label>Phone Number:</label>
        <input type="tel" class="form-control" name="phone" id="phone" value="<?=$phone?>" required data-validation-required-message="Please enter your phone number.">
      </div>
    </div>
    <div class="control-group form-group col-md-8">
      <div class="controls">
        <label>Email Address:</label>
        <input type="email" class="form-control" name="email" id="email" value="<?=$email?>" required data-validation-required-message="Please enter your email address.">
      </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>Message:</label>
        <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
        <script>
        ClassicEditor
            .create( document.querySelector( '#message' ) )
            .catch( error => {
                console.error( error );
            } );
        </script>
      </div>
    </div>
    <div id="success"></div>
    <!-- For success/fail messages -->
    <button type="submit" class="btn btn-outline-primary" id="sendMessageButton">Send Message</button>
  </form>
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
