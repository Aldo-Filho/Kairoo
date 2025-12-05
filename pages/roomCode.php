<?php
session_start();

$codigo_sala = htmlspecialchars($_GET['codigo'] ?? 'ERRO');

$type_user = $_SESSION['type_user'] ?? 'GUEST';
$logado = $_SESSION['logado'] ?? false;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kairoo | Sala Criada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../public/assets/css/navbar.css" />
    <link rel="stylesheet" href="../public/assets/css/createRoom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="../public/assets/ico/ico.png" type="image/x-icon">
</head>

<body>
    <?php include_once("../includes/navbar_createRoom.php"); ?>

    <div class="row animate__animated animate__bounceIn">
        <div class="col-12 d-flex justify-content-center pt-3">
            <div class="box1 d-flex align-items-center flex-column">
                <div class="title p-3 mb-4 text-center">
                    <h1 class="fs-3">SALA CRIADA!</h1>
                </div>

                <p class="mt-4 w text-center">Peça aos alunos para entrarem com o seguinte código:</p>

                <div class="code"><?php echo $codigo_sala; ?></div>

            </div>
        </div>
    </div>

</body>

</html>