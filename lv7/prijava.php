<?php
session_start();
error_reporting(0);
include('spoj.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($spoj, "select id, uloga from korisnici where k_ime='$username' && lozinka='$password' ");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        $_SESSION['id'] = $ret['id'];

		$uloga = $ret['uloga'];
		if ($uloga == "admin") {
			header('location:dodaj_proizvod.php');
		} else {
			header('location:ispis.php');
		}

    } else {
        echo '<script>alert("Wrong username or password.")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<div>
        <h2>LOGIN</h2>
        <form action="#" method="post" name="login">
            <div>
                <label for="uname">Username:</label>
                <input type="text" id="username" placeholder="Enter username" name="username" required>
            </div>
			<br>
            <div>
                <label for="pwd">Password:</label>
                <input type="password"id="password" placeholder="Enter password" name="password" required>
            </div>
            <button type="submit" name="login">Submit</button>
        </form>
    </div>
</body>
</html>