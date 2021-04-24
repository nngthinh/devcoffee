<?php
$loginErr = false;
if (isset($_SESSION['valid'])) {
	header('location: index.php');
}
if (isset($_POST['login'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	//////////////////////////////////////////
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
	$lastdate = date('Y-m-d');
	$qr = "SELECT username, password, admin FROM account";
	$rs = mysqli_query($conn, $qr);
	while ($row = mysqli_fetch_array($rs)) {
		if ($user == $row['username'] && $pass == $row['password']) {
			$qrupdate = "UPDATE account SET lastdate  = '$lastdate' WHERE username = '$user';";
			$rsupdate = mysqli_query($conn, $qrupdate);
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			$_SESSION['valid'] = true;
			if (isset($_POST['remember'])) {
				setcookie('username', $user, time() + 60 * 60 * 7);
				setcookie('password', $pass, time() + 60 * 60 * 7);
			}
			if ($row['admin'] == 1) {
				header('location: manager/manager.php');
				die();
			} else {
				header('location: index.php');
				die();
			}
		}
	}
	$loginErr = true;
	echo '<a href="login/login.php">Return to Login page!</a>';
	// Close connect
	$conn->close();
	////////////////////////////////////////
} else {
	header("location: login/login.php");
	die();
}
?>
<style>
	body {
		text-align: center;
	}

	div {
		text-align: center;
		color: red;
	}
</style>
<div id="error">
	<?php
	if ($loginErr == true) {
		echo "Username or Password is NOT WRONG! Please enter username and password again!";
	}
	?>
</div>

<!-- <?php
		// if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
		// 	$user = $_COOKIE['username'];
		// 	$pass = $_COOKIE['password'];
		// 	echo "<script>
		// 		$('#user').val() = '$user';
		// 		$('#pass').val() = '$pass';
		// 	</script>"
		// }
		?> -->