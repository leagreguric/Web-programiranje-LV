<?php
session_start();
error_reporting(0);
include('spoj.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:odjava.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Proizvod je uspjesno unesen</h1>

    <a href="dodaj_proizvod.php">Dodaj novi proizvod</a>
    <a href="ispis.php">Ispis</a>
</body>

</html>