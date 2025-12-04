<?php
$connection = mysqli_connect("localhost", "root", "", "u136736371_kairoo");

if (!$connection) {
    echo "Erro" . mysqli_connect_error();
}