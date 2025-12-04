<?php
include "connection.php";

$name = mysqli_real_escape_string($connection, $_POST["name_user"]);
$email = mysqli_real_escape_string($connection, $_POST["email_user"]);
$password = mysqli_real_escape_string($connection, $_POST["password_user"]);
$confirm_password = mysqli_real_escape_string($connection, $_POST["confirm_password"]);

if ($password == $confirm_password) {
    $password = md5($_POST["password_user"]);
} else {
    echo "As senhas não coincidem";
    return;
}

$sqlFindEmail = "SELECT * FROM users WHERE email_user = '$email'";
$resultFindEmail = mysqli_query($connection, $sqlFindEmail);

if (mysqli_num_rows($resultFindEmail) > 0) {
    echo "Esse e-mail já foi cadastrado";
    return;
}

if (str_contains($email, '@edu')) {
    echo "Email Institucional Válido";
} elseif (str_contains($email, '@prof')) {
    echo "Email Institucional Válido";
} else {
    echo "Email Institucional Inválido";
    return;
}

$sql = "INSERT INTO users (name_user, email_user, password_user) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($connection, $sql);

if ($result) {
    // sleep(1);
    // header("Location: ../pages/success_register.php");
    // exit();
    echo "Cadastro Realizado!";
}

mysqli_close($connection);
