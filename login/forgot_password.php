<?php  
	session_start();
	$emailValid = 0;
	if(isset($_POST['mail'])) {
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "devcoffee";
		// Create connection
		$conn = mysqli_connect($hostname, $username, $password, $dbname);
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: ".mysqli_connect_error();
		}
		// // Update
		// $qr = "UPDATE account SET password = '0' WHERE email = '".$_POST['mail']."';";
		// $rs = mysqli_query($conn, $qr);
		// Send
		$qr = "SELECT id, username, email FROM account";
		$rs = mysqli_query($conn, $qr);
		while ($row = mysqli_fetch_array($rs)) {
			if($row['email'] == $_POST['mail']) {

				include 'PHPMailer/class.smtp.php';
				include 'PHPMailer/class.phpmailer.php'; 

				$mail = new PHPMailer();
				$mail->IsSMTP(); // enable SMTP

				$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
				$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 465; // or 587
				$mail->IsHTML(false);
				$mail->Username = "thirdpersonapp@gmail.com";
				$mail->Password = "1234hihi:v";
				$mail->SetFrom("systemtest@gmail.com");
				$mail->Subject = "[DEV_COFFEE] YOUR ACCOUNT";
				$mail->Body = "Hello ".$row['email']." ,\n***Your username is ".$row['username']."\n***Your ID is ".$row['id']."\n Please change password in link : http://localhost/devcoffee/login/change_password.php\n Thank you!";
				$mail->AddAddress($row['email']);

				 if(!$mail->Send()) {
				    $emailValid = 3;
				 } else {
				 	header('location: forgot_password.php');
				    $emailValid = 1;	
				 }
			}
		}
		if ($emailValid == 0) {
			$emailValid = 2;
		}
		// Close connect
		$conn->close();
	}
?>
<style>
	body {
		background-color: #F7F7D1;
	}
	form {
		text-align: center;
		margin-top: 50px;
	}
	div#error {
		text-align: center;
		color: red;
	}	
	label {
		font-weight: bold;
		font-size: 20px;
	}
	input#mail {
		height: 30px;
		width: 300px;
	}
	input#get_mail {
		height: 30px;
		width: 50px;
		font-weight: bold;
	}
	input#get_mail:hover {
		background-color: #79B71E;
		color: white;
	}
	a {
		font-size: 20px;
		font-weight: bold;
	}
</style>
<form method="POST">
	<label>Please enter your mail!</label>
	<br><br>
	<input type="email" name="mail" id="mail">
	<br><br>
	<input type="submit" name="get_mail" id="get_mail" value="OK">
	<br><br>
	<a href="login.php">Return to Login page!</a>
</form>
<div id="error">
	<?php  
		if ($emailValid == 1) {
			echo "Success! Please CHECK your MAIL to receive acount again!";
		}
		else if ($emailValid == 2) {
			echo "Error! Email is not exist, please ENTER email AGAIN!";
		}
		else if ($emailValid == 3) {
			echo "Failed!";
		}
	?>
</div>