<?php 

session_start();


if (isset($_POST['loginBtn'])) {
  
  if (isset($_SESSION['firstName'])) {

      $_SESSION['message'] = $_SESSION['firstName'] . " is already logged in. Wait for them to logout first."; // Corrected message
      header('Location: index.php');
      exit(); 
  }

	$firstName = $_POST['firstName'];

	$password = md5($_POST['password']);

	$_SESSION['firstName'] = $firstName;
	$_SESSION['password'] = $password;

	header('Location: index.php');
}

if(isset($_POST['LogoutBtn'])) {
  session_unset();
  session_destroy();
  header('Location: index.php');
}

?>