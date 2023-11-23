<?php
    $spoj = mysqli_connect("localhost", "root", "", "skladiste");
    if(mysqli_connect_errno()){
    echo "Spoj na bazu neuspjesan.".mysqli_connect_error();
    }
?>