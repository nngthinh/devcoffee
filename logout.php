<?php
session_start();
session_destroy();
# If logged in -> unset cookie
if (isset($_COOKIE["username"])) {
	unset($_COOKIE["username"]);
	setcookie("username", null, -1);
}
if (isset($_COOKIE["password"])) {
	unset($_COOKIE["password"]);
	setcookie("password", null, -1);
}
header('location: index.php');
die();
