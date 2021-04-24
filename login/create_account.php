<?php
session_start();
$signupErr = 0;

if (
	isset($_POST['username']) and isset($_POST['password']) and isset($_POST['firstname']) and
	isset($_POST['lastname']) and isset($_POST['email']) and isset($_POST['phone'])
) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$gender = $gender == "Male" ? 1 : 0;
	$birthday = $_POST['birthday'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$admin = 0;
	$firstdate = date('Y-m-d');
	$lastdate = date('Y-m-d');

	$md5pass = $pass;

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "devcoffee";
	// Create connection
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql = "INSERT INTO account (username, password, fname, lname, gender, birthday, email, phone, address, admin, firstdate, lastdate) VALUES ('$user', '$md5pass', '$fname', '$lname', '$gender', '$birthday', '$email', '$phone', '$address', '$admin', '$firstdate', '$lastdate')";
	if ($conn->query($sql) === true) {
		echo "You are successfully sign up!";
	} else {
		echo "Error inserting record: " . $conn->error;
	}
	// Close connect
	$conn->close();
} else {
	$signupErr = 1;
}
////////////////////////////////////////
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
</head>
</head>
<style>
	body {
		text-align: center;
		background-image: url(signup_background.jpg);
	}

	form {
		text-align: center;
		margin-top: 40px;
	}

	div {
		text-align: center;
		color: red;
	}

	label {
		font-weight: bold;
		font-size: 20px;
		color: yellow;
	}

	input {
		width: auto;
	}

	h2 {
		font-weight: bold;
		color: blue;
	}

	a {
		font-size: 20px;
		font-weight: bold;
	}

	input#signup {
		height: 30px;
		width: 80px;
		font-weight: bold;
	}

	input#signup:hover {
		background-color: #79B71E;
		color: white;
	}
</style>

<body>
	<form method="POST">
		<h2>SIGN UP FORM</h2>
		<label for="user">Username:</label>
		<input type="text" name="username" id="user">
		<br><br>
		<label for="pass">Password:</label>
		<input type="password" name="password" id="pass">
		<br><br>
		<label for="user">Firstname:</label>
		<input type="text" name="firstname" id="fname">
		<br><br>
		<label for="user">Lastname:</label>
		<input type="text" name="lastname" id="lname">
		<br><br>
		<input type="radio" id="male" name="gender" value="Male">
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="Female">
		<label for="female">Female</label>
		<br><br>
		<label for="birthday">Birthday:</label>
		<input type="text" name="birthday" id="birthday">
		<br><br>
		<label for="mail">Email:</label>
		<input type="email" name="email" id="mail">
		<br><br>
		<label for="phone">Phone:</label>
		<input type="number" name="phone" id="phone">
		<br><br>
		<label for="address">Address:</label>
		<input type="text" name="address" id="address">
		<br><br>
		<input type="submit" name="signup" id="signup" value="Sign Up">
		<br><br>
		<a href="login.php">Return to Login page!</a>
	</form>
	<br><br>
	<div id="error">
		<?php
		if ($signupErr == 1) {
			echo "Please enter all your information again!";
		}
		?>
	</div>
	<script>
		function encrypt(pw) {
			var encrypted_pw;
			encrypted_pw = CryptoJS.MD5(pw);
			return encrypted_pw;
		}
		// alert(encrypt(document.getElementById('pass').value));
	</script>
</body>

</html>