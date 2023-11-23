<?php
session_start();
error_reporting(0);
include('spoj.php');

if (isset($_POST['register'])) {
    $fname = $_POST['name'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($spoj, "select id from korisnici where k_ime='$username'");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        echo '<script>alert("Korisnicko ime zauzeto!")</script>';
    } else {
        $query = mysqli_query($spoj, 'INSERT INTO korisnici (ime, prezime, k_ime, lozinka, uloga) VALUES("' . $fname . '", "' . $lname . '", "' . $username . '", "' . $password . '", "kupac")');
        $query2 = mysqli_query($spoj, 'select id from korisnici where k_ime="' . $username . '"');
        if ($query) {
            $ret = mysqli_fetch_array($query2);
            $_SESSION['id'] = $ret['id'];
            header('location:dodaj_proizvod.php');
        } else {
            echo '<script>alert("Greška kod registracije")</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <h2>Registriraj se</h2>
    <form action="#" method="post" name="login">
        <label for="name">First Name:</label>
        <input type="text" id="name" placeholder="Enter name" name="name" required>
        <br>
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" placeholder="Enter last name" name="lname" required>
        <br>
        <label for="uname">Username:</label>
        <input type="text" id="username" placeholder="Enter username" name="username" required>
        <br>
        <label for="pwd">Password:</label>
        <input type="password" id="password" placeholder="Enter password" name="password" required>
        <button type="submit" name="register">Submit</button>
    </form>
</body>

</html>