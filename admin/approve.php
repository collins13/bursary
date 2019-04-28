<?php
include 'config/config.php';
$id = $_POST['id'];
$sql1 = $conn->query("UPDATE apply SET active ='1' WHERE id ='$id'");
if ($sql1) {
  ?>
  <script type="text/javascript">
  alert('user approval success!');

  </script>
  <?php
}
 ?>
