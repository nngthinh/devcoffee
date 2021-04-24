<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
</head>
<style>
    body {
        text-align: center;
        background-image: url(login_background.jpg);
    }

    form {
        text-align: center;
        margin-top: 100px;
    }

    label {
        font-weight: bold;
        font-size: 20px;
        color: #FFD300;
    }

    h1 {
        font-weight: bold;
        color: #F700C0;
    }

    #login,
    a,
    #newuser {
        font-weight: bold;
        font-size: 18px;
    }

    a {
        color: #116333;
        background-color: yellow;
    }

    a:hover {
        background-color: #F6F631;
    }

    #login:hover {
        background-color: #79B71E;
        color: white;
    }

    #newuser:hover {
        background-color: #43A8D2;
        color: white;
    }
</style>

<body>
    <h1>WELCOME TO DEVCOFFEE</h1>
    <form id="loginForm" method="POST" action="../validate.php">
        <label for="user">Username:</label>
        <input type="text" name="username" id="user">
        <br><br>
        <label for="pass">Password:</label>
        <input type="password" name="password" id="pass">
        <br><br>
        <input type="checkbox" name="remember" id="remember" value="" <?php if (isset($_COOKIE['username'])) echo "checked"; ?>>
        <label for="remember">Remember Me</label>
        <br><br>
        <input type="submit" name="login" id="login" value="Login">
        <br><br>
        <a href="forgot_password.php">Forgot password?</a>
        <br><br>
        <input type="button" name="newuser" id="newuser" value="Create a new account" onclick="new_user()">
    </form>
    <br><br>
    <script>
        function new_user() {
            location.assign("create_account.php");
        }

        function encrypt(pw) {
            var encrypted_pw;
            encrypted_pw = CryptoJS.MD5(pw);
            return encrypted_pw;
        }
        //alert(encrypt('123'));

        // $('#login').on('click', function(){
        // 	alert("hihi");
        // 	var user = $('#user').val();
        // 	var pass = $('#pass').val();
        // 	if (user == "" || name == "") {
        // 		alert("Please enter information of sign in!");
        // 	}
        // 	else if (user.length > 20) {
        // 		alert("Your username is too long!");
        // 	}
        // 	else if (pass.length > 20) {
        // 		alert("Your password is too long!");
        // 	}
        // });
    </script>
    <?php

    if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
        $user = $_COOKIE['username'];
        $pass = $_COOKIE['password'];
        echo "<script>
				document.getElementById('user').value = '$user';
				document.getElementById('pass').value = '$pass';
            </script>";
        
    }
    ?>
</body>

</html>