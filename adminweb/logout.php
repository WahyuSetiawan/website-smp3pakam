<?php
ob_start();
  session_start();
  session_destroy();
  echo "<center>Anda telah sukses keluar sistem <b>[LOGOUT]<b>";
  header ("location: ../index.php");
?>
