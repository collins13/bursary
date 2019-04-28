<?php
function display_errors($errors){
    $display = '<div class="alert alert-danger" role="alert">';
    foreach($errors as $error) {
      $display .= $error;
    }
    $display .= '</div>' ;
    return $display;
}
function login($user_id){
  $_SESSION['SBUser'] = $user_id;

  global $conn;

  $date =date("Y-m-d H:i:s");

  $conn->query("UPDATE users SET last_login ='$date'  WHERE id ='$user_id'");

  $_SESSION['success_flash'] ='login success welcome';
  header('Location:home.php');
}
function is_logged_in(){
  if (isset($_SESSION['SBUser']) && $_SESSION['SBUser'] > 0) {
  return true;
}else {
  return false;
  }
}
function logged_in_error_redirect($url = 'login.php'){
  $_SESSION['error_flash'] = "you must be logged to be logged to access the page";
  header('Location: '.$url);
}
 ?>
