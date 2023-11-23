<?php
    session_start();
    error_reporting(0);
    include('spoj.php');
    if (strlen($_SESSION['id'] == 0)) {
        header('location:odjava.php');
    }

    $user_id = $_SESSION['id'];
    $query = mysqli_query($spoj, 'SELECT uloga FROM korisnici WHERE id = "'.$user_id.'"');
    $row = mysqli_fetch_array($query);
    if($row['uloga'] == 'kupac'){
    header('location:ispis.php');
    }


    if (isset($_POST['submit'])) {
        $naziv = $_POST['proizvod'];
        $cijena = $_POST['cijena'];
        $kolicina = $_POST['kolicina'];
        $opis = $_POST['opis'];

        $query = mysqli_query($spoj, 'INSERT INTO proizvodi (proizvod, opis, kolicina, cijena) VALUES("'.$naziv.'", "'.$opis.'", "'.$kolicina.'", "'.$cijena.'")');
        if ($query) {
        header('location:unos.php');
        }
        else {

        echo '<script>alert("Error")</script>';
        }
    }


    $id = $_SESSION['id'];
    $ret = mysqli_query($spoj, "select * from korisnici where id='$id'");
    $row = mysqli_fetch_array($ret) 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dodaj prozivod</title>
    </head>
    <body>
        <h1>Dobrodošao <?php echo $row['ime']." ".$row['prezime'];?></h1>

        <form action="" method="post">
        
            <h3>Unesi informacije o proizvodu</h3>
            <label for="proizvod">Naziv proizvoda:</label>
            <input type="text" id="proizvod" name="proizvod"><br>

            <label for="cijena">Cijena:</label>
            <input type="text" id="cijena" name="cijena"><br>

            <label for="kolicina">Kolicina:</label>
            <input type="number" id="kolicina" name="kolicina"><br>

            <label for="opis">Opis</label>
            <input type="text" id="opis" name="opis"><br>

            <button type="submit" name="submit">Unesi</button> 
        </form>

        <br><br>
        <a href="ispis.php">Ispis</a>
        <a href="odjava.php">Odjava</a>
    </body>
</html>
