<?php  
	session_start();
	if (isset($_POST['change_pass'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$pass_1 = $_POST['password_1'];
		$id = $_POST['id'];
		$md5pass = $pass;

		if($pass != $pass_1) {
			$pass_1Err = "password again and new password is difficently!";
		}

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
		// Update
		$qr = "SELECT username, password, id FROM account";
		$rs = mysqli_query($conn, $qr);
		while ($row = mysqli_fetch_array($rs)) {
			if($user == $row['username'] && $id == $row['id']) {
				$qrupdate = "UPDATE account SET password  = '$md5pass' WHERE username = '$user' and id = '$id';";
				$rsupdate = mysqli_query($conn, $qrupdate);
				if ($rsupdate === true) {
					echo "<script>alertFunction();</script>";
					header('location: login.php');
				}
				else {
					echo "Error: ".$conn->error;
					header('location: change_pass.php');
				}
			}
		}
		// Close connect
		$conn->close();
	}

?>
<style>
	body {
		text-align: center;
		background-image: url(login_background.jpg);
	}
	table {
		text-align: center;
	}
	div {
		margin: auto;
		text-align: center;
	}
	.error {
		color: red;
	}
	h2 {
		float: left;
		color: yellow;
		font-size: 40px;
	}
	h2#change {
		float: left;
		color: pink;
		font-size: 20px;
	}
	th {
		font-weight: bold;
		font-size: 20px;
		color: orange;
	}
	a {
		font-size: 20px;
		font-weight: bold;
	}
	a:hover {
		background-color: #2FB45A;
		color: white;
	}
	input#change_pass {
		height: 30px;
		width: 80px;
		font-weight: bold;
	}
	input#change_pass:hover {
		background-color: #79B71E;
		color: white;
	}
</style>
<script>
	function alertFunction() {
	  	document.getElementById("alert").innerHTML = "You are successfully change password!";
	}
    function validate() {
		var n1 = document.getElementById("pass");
		var n2 = document.getElementById("pass_1");
		if(n1.value != "" && n2.value != "") {
			if(n1.value == n2.value) {
			  return true;
			}
		}
		alert("pass again must be similar to new pass!");
		return false;
    }
</script>
<div>
	<?php
	// define variables and set to empty values
		$user = $pass = $pass_1 = $id = "";
		$userErr = $passErr = $pass_1Err = $idErr = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['user'])){
				$userErr = "username is required";
			}
		
			if (empty($_POST['pass'])) {
				$passErr = "new password is required";
			} 

			if (empty($_POST['pass_1'])) {
				$pass_1Err = "password again is required";
			}
			if (empty($_POST['pass_1'])) {
				$idErr = "id is required";
			}
		}

	?>
	<form method="POST" onsubmit="return validate()">
		<h2 id="change">CHANGE MY PASSWORD</h2><br>
		<h2>D</h2><br>
		<h2>E</h2><br>
		<h2>V</h2><br>
		<h2>C</h2><br>
		<h2>O</h2><br>
		<h2>F</h2><br>
		<h2>F</h2><br>
		<h2>E</h2><br>
		<h2>E</h2><br>
		<table>
			<tr>
				<th>My username:</th>
				<td><input type="username" name="username" id="user" required></td>
				<td><span class="error">*<?php echo $userErr; ?></span></td>
			</tr>
			<tr>
				<th>New password:</th>
				<td><input type="password" name="password" id="pass" required></td>
				<td><span class="error">*<?php echo $passErr; ?></span></td>
			</tr>
			<tr>
				<th>Password again:</th>
				<td><input type="password" name="password_1" id="pass_1" required></td>
				<td><span class="error">*<?php echo $pass_1Err; ?></span></td>
			</tr>
			<tr>
				<th>My ID:</th>
				<td><input type="number" name="id" id="id" required></td>
				<td><span class="error">*<?php echo $idErr; ?></span></td>
			</tr>
			<tr>
				<td rowspan="3"><a href="login.php">Return to Login page!</a></td>
			</tr>
			<tr>
				<td rowspan="3"><input type="submit" name="change_pass" id="change_pass" value="Confirm"></td>
			</tr>
			<tr>
				<td rowspan="3"><p id="alert">...</p></td>
			</tr>
		</table>
	</form>
</div>