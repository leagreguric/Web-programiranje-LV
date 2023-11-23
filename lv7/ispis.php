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
    <title>Ispis</title>
</head>

<body>
    <a href="dodaj_proizvod.php">Dodaj novi proizvod</a>
    <a href="odjava.php">Odjavi se</a>
    <div>
        <h2>Ispis proizvoda</h2>

        <table>
            <tr>
                <th></th>
                <th>Proizvod</th>
                <th>Opis</th>
                <th>Kolicina</th>
                <th>Cijena</th>
            </tr>
            <?php
            $ret = mysqli_query($spoj, "select * from proizvodi");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {

            ?>
                <tr>
                    <td><?php echo $cnt; ?></td>
                    <td><?php echo $row['proizvod']; ?></td>
                    <td><?php echo $row['opis']; ?></td>
                    <td><?php echo $row['kolicina']; ?></td>
                    <td><?php echo $row['cijena']; ?></td>
                </tr>
            <?php
                $cnt = $cnt + 1;
            } ?>
        </table>
    </div>
    <a href="odjava.php">Odjava</a>
</body>

</html>