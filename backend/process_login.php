<?php
session_start();
include "connection.php";

$email = mysqli_real_escape_string($connection, $_POST["email_user"]);
$password = md5($_POST["password_user"]);

$sql = "SELECT * FROM users WHERE email_user = '$email' AND password_user = '$password'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['logado'] = true;

    if (str_contains($email, '@edu')) {
        $_SESSION['type_user'] = "STUDENT";

        header("Location: ../public/index.php");
        exit();
    } elseif (str_contains($email, '@prof')) {
        $_SESSION['type_user'] = "TEACHER";

        header("Location: ../public/index.php");
        exit();
    } else {
        echo "Tipo de usuário desconhecido.";
    }
} else {
    echo "Usuário ou senha incorretos.";
}

mysqli_close($connection);
