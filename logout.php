<?php
session_start();
unset($_SESSION['sun']);
session_destroy();
header("Location:login.php");
exit();
?>
