<?php
$conn = mysqli_connect("remotemysql.com", "PuDPAalGlA", " 7xR7h25KjQ", "PuDPAalGlA");
if (!$conn) {
  echo "coonection error please try again".mysqli_connect_error();
}


/*session_start();
function login($user_id){
  $_SESSION['SBUser'] = $user_id;

  global $db;

  $date =date(Y:m:d, H:i:s);

  $db->query("UPDATE users SET last_login ='$date'  WHERE id ='$user_id'");

  $_SESSION['success_flash'] ='login success welcome';
  header('Location:home.php');
}
*/
session_start();
include 'helpers/helpers.php';

if (isset($_SESSION['SBUser'])) {
$user_id = $_SESSION['SBUser'];
$query = $conn->query("SELECT * FROM admin WHERE id ='$user_id'");
$user_data = mysqli_fetch_assoc($query);
$user_data['f_name'];
}
if (isset($_SESSION['success_flash'])) {
  echo '<div class="alert alert-success" role="alert">
         '.$_SESSION['success_flash'].'
        </div>';
  unset($_SESSION['success_flash']);
}
if (isset($_SESSION['error_flash'])) {
  echo '<div class="alert alert-danger" bd-danger text-danger role="alert">
  '.$_SESSION['error_flash'].'
  </div>';
  unset($_SESSION['error_flash']);
}

function pretty_date($date){
  return date("M d, Y h:i A",strtotime($date));
}
 ?>
