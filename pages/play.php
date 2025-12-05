<?php
session_start();

$type_user = $_SESSION['type_user'] ?? 'GUEST';
$logado = $_SESSION['logado'] ?? false;

if ($logado && $type_user == 'STUDENT') {
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kairoo | Jogar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/assets/css/navbar.css">
        <link rel="stylesheet" href="../public/assets/css/play.css">
        <link rel="shortcut icon" href="../public/assets/ico/ico.png" type="image/x-icon">
    </head>

    <body>
        <?php include_once("../includes/navbar_play.php"); ?>

        <section class="d-flex justify-content-center align-items-center">
            <div id="gameContainer" class="gameBox rounded-3 p-5 gap-5 flex-column">

            </div>
        </section>

        <script src="../public/assets/js/play.js"></script>
    </body>

    </html>
<?php
}
?>