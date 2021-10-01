<?php
session_start();
if(isset($_POST['login'])) {
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$result = mysqli_query($conn, "select * from profil where id_profil = '$username' and password = '$password'") or die("Failed".mysql_error());
	$row = mysqli_fetch_array($result);
	if($username == $row['id_profil'] && $password == $row['password']) {
		session_start();
		$_SESSION['user']=$username;
		$_SESSION['pass']=$password;
		header('location:page/profil.php');
	} else {
		echo 'Username atau Password Salah';	
	}
}
?> 