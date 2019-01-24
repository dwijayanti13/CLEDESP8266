<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
//$hpwd = hash('sha1',$password);
$hpwd = hash('sha256',$password);
//$hash = "3da5fc0bfdbf2b0e1ba2b171771be854749d9453";
$hash = "2b7ea0f9add9cefc83aa768dce8925c5f8b9085de28443f1d2677d2052fab69a";
if (empty($username))
{
	echo "<script>alert('Username belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=loginform.php'>";
}else if (empty($password))
{
	echo "<script>alert('Password belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=loginform.php'>";
}else if ($username == 'dwi' and $hpwd == $hash)
{
	$_SESSION['username']= $username;
	header("location:index.php");
}else
{
	header("location:salah.php");		
#echo "<meta http-equiv='refresh' content='1 url=loginform.php'>";
}
?>