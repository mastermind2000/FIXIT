<?php
	session_start();
	include('connection.php');
	$missingEmail = '<p><strong>Please enter your email address!</strong></p>';
	$missingPassword = '<p><strong>Please enter a Password!</strong></p>';
	$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';

	if(empty($_POST["loginemail"])){
		$errors .= $missingEmail;
	}else{
		$email = filter_var($_POST["loginemail"],FILTER_SANITIZE_EMAIL);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors .= $invalidEmail;
		}
	}
	if(empty($_POST["loginpassword"])){
		$errors .= $missingPassword;
	}
	else{
		$password = filter_var($_POST["loginpassword"],FILTER_SANITIZE_STRING);
	}
	if($errors){
		$result = '<div class="alert alert-danger">' . $errors .'</div>';
		echo $result;
		exit;
	}
	else{
		$email = mysqli_real_escape_string($link,$email);
		$password = mysqli_real_escape_string($link,$password);
		$password = hash('sha256', $password);
		$sql = "SELECT * FROM user_registration WHERE email = '$email' AND password = '$password'";
		$result = mysqli_query($link, $sql);
		if(!$result){
			echo "<div class='alert alert-danger'> Some Error Occured.</div>";
			exit;
		}
		$count = mysqli_num_rows($result);
		if($count !== 1){
			echo '<div class="alert alert-danger">Wrong Email or Password</div>';
		}
		else{
			$_SESSION["userid"] = trim($row["id"]);
			echo 1;
		}
	}
?>