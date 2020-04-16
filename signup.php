<?php
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);
	session_start();
	include('connection.php');

	//Create Error Variables
	$missingName = '<p><strong>Please Enter Your Name!</strong></p>';
	$missingUsername = '<p><strong>Please enter a username!</strong></p>';
	$missingEmail = '<p><strong>Please enter your email address!</strong></p>';
	$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
	$missingPassword = '<p><strong>Please enter a Password!</strong></p>';
	$invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';
	$differentPassword = '<p><strong>Passwords don\'t match!</strong></p>';
	$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';

	if(empty($_POST["name"])){
		$errors .= $missingName;
	}else{
		$name = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
	}
	if(empty($_POST["username"])){
		$errors .= $missingUsername;
	}else{
		$username = filter_var($_POST["username"],FILTER_SANITIZE_STRING);
	}
	if(empty($_POST["email"])){
		$errors .= $missingEmail;
	}else{
		$email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors .= $invalidEmail;
		}
	}
	if(empty($_POST["password"])){
		$errors .= $missingPassword;
	}elseif (!(strlen($_POST["password"]) > 6 and preg_match('/[A-Z]/',$_POST["password"]) and preg_match('/[0-9]/',$_POST["password"]))) {
		$errors .= $invalidPassword;
	}else{
		$password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);
		if(empty($_POST["password2"])){
			$errors .= $missingPassword2;
		}
		else{
			$password2 = filter_var($_POST["password2"],FILTER_SANITIZE_STRING);
			if($password !== $password2){
				$errors .= $differentPassword;
			}
		}
	}
	if($errors){
		$result = '<div class="alert alert-danger">' . $errors .'</div>';
		echo $result;
		exit;
	}
	$name = mysqli_real_escape_string($link,$name);
	$username = mysqli_real_escape_string($link,$username);
	$email = mysqli_real_escape_string($link,$email);
	$password = mysqli_real_escape_string($link,$password);
	$password = hash('sha256', $password);

	$sql = "SELECT * FROM `user_registration` WHERE Username='$username'";
	$result = mysqli_query($link,$sql);
	if(!$result){
		echo "<div class='alert alert-danger'> Some Error Occured In Query Processing. Pls Try Again Later. </div>";
		exit;
	}
	$exist = mysqli_num_rows($result);
	if($exist){
		echo "<div class='alert alert-danger'> Username already registered. Would you like to Login? </div>";
		exit;
	}
	$sql = "SELECT * FROM `user_registration` WHERE Email='$email'";
	$result = mysqli_query($link,$sql);
	if(!$result){
		echo "<div class='alert alert-danger'> Some Error Occured In Query Processing. Pls Try Again Later. </div>";
		exit;
	}
	$exist = mysqli_num_rows($result);
	if($exist){
		echo "<div class='alert alert-danger'> Email already registered. Would you like to Login? </div>";
		exit;
	}
	$activation_key = bin2hex(openssl_random_pseudo_bytes(16));

	$sql = "INSERT INTO `user_registration`(`Name`, `Username`, `Email`, `Password`, `activation`) VALUES ('$name','$username','$email','$password','$activation_key')";
	$insert = mysqli_query($link,$sql);
	//if($insert){
	//	echo "<div class='alert alert-success'> You are now registered. </div>";
	//	exit;
	//}
	if(!$insert){
		echo "<div class='alert alert-danger'> Some Error Occured In Insertion. Pls Try Again Later. </div>";
		exit;
	}
	//else{
	//	echo "<div class='alert alert-success'> You are now registered. </div>";vs.fixit.dev@gmail.com
	//}
	$to = $email;
	$subject = 'Activation Email';
	$message = 'This is the email message body';
	$header = implode("\r\n", ['From: vs.fixit.dev@gmail.com','Reply-To: vs.fixit.dev@gmail.com','X-Mailer: PHP/' . PHP_VERSION]);
	$result = mail($to, $subject, $message, $headers);
	//if()
	//echo "<div class='alert alert-success'>Step1</div>";
	//$result = mail($email,$subject,$message,'From: bitsvihar@gmail.com');
	//echo "<div class='alert alert-success'>Step2</div>";
	if($result){
		echo "<div class='alert alert-success'>Thank for your registring! A confirmation email has been sent to $email. Please click on the activation link to activate your account.</div>";
	}
	else{
		echo "<div class='alert alert-danger'> Some Error Occured In Sending The Confirmation Mail. </div>";
	}




?>

	