<?php
$host='localhost:3306';
$user='root';
$pass='';
$db='19911a0515';
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
die('could not connect:'.mysqli_error($conn));
}
else
{
echo "connected successfully";
$vun=$_POST['uname'];
$vpwd=$_POST['pwd'];
$sql="select * from users where username='$vun' and password='$vpwd'";
$r=mysqli_query($conn,$sql);
if(mysqli_num_rows($r)==1)
{
session_start();
$_SESSION['sun']=$vun;
$_SESSION['spwd']=$vpwd;
if(!isset($_SESSION['sun']))
{
echo "you are not logged in";
exit();
}
else
{
header("Location:wel.php");
}
}
else
{
echo"login failed";
}
mysqli_close($conn);
}

?>