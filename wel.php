<html>
<body>
<script>
windowhistory.forward();
</script>
<?php
session_start();
echo "welcome".$_SESSION['sun'];
?>
<a href="logout.php">Logout</a>
</body>
</html>