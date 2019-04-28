<?php
function display_errors($errors){
    $display = '<div class="alert alert-danger" role="alert">';
    foreach($errors as $error) {
      $display .= $error;
    }
    $display .= '</div>' ;
    return $display;
}

function sanitize($dirty){
  return htmlentities($dirty, ENT_QUOTES, "UTF-8" );
}
function login($user_id){
  $_SESSION['SBUser'] = $user_id;

  global $conn;

  $date =date("Y-m-d H:i:s");

  $conn->query("UPDATE admin SET last_login ='$date'  WHERE id ='$user_id'");

  $_SESSION['success_flash'] ='login success welcome';
  header('Location:index.php');
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

function permision_error_redirect($url = 'login.php'){
  $_SESSION['error_flash'] = "you dont have access the page";
    header('Location: '.$url);
}
function has_permission($permission ='admin'){
  global $user_data;
  $permissions = explode(',', $user_data['permisions']);
  if (in_array($permission, $permissions, true )) {
    return true;
  }
  return false;
}
 ?>
