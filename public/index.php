<?php
session_start();

$type_user = $_SESSION['type_user'] ?? 'GUEST';
$logado = $_SESSION['logado'] ?? false;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kairoo | Início</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <?php include_once("../includes/navbar.php"); ?>

    <main>
        <section class="section" id="start">
            <div>
                <img src="assets/img/kairooLogo.png" id="logoImg2">
            </div>
        </section>

        <section class="section flex-wrap align-content-start gap-5" id="about">
            <div class="my-5 pt-5">
                <img src="assets/img/aboutTitle.png" class="title">
            </div>
            <div class="d-flex justify-content-center">
                <p class="vt323 text-white px-5 fs-1 text-center">
                    Mergulhe em Kairoo, uma plataforma educacional gamificada que transforma o aprendizado em uma
                    jornada
                    interativa. Explore um ambiente escolar em 2D, enfrente desafios e chefes, conquiste pontos e avance
                    nos
                    rankings. Com uma proposta que une tecnologia e diversão, Kairoo torna o ato de aprender uma
                    experiência
                    envolvente, motivadora e cheia de conquistas.
                </p>
            </div>
        </section>

        <section id="gradient0"></section>
        <section id="gradient1"></section>
        <section id="gradient2"></section>
        <section id="gradient3"></section>

        <section class="section flex-wrap align-content-start gap-5" id="history">
            <div class="my-5 pt-5">
                <img src="assets/img/historyTitle.png" class="title">
            </div>
            <div class="d-flex justify-content-center">
                <p class="vt323 text-white px-5 fs-2">
                    A Academia Kairoo sempre foi um lugar onde o conhecimento ganhava forma, cor e vida. Tudo era
                    mantido em equilíbrio pela joia Kairós, capaz de fortalecer o foco e a motivação dos estudantes.
                    <br> <br>
                    Mas quando essa joia se fragmentou, algo inesperado aconteceu: as disciplinas ganharam seus próprios
                    inimigos, criaturas criadas a partir das dificuldades e distrações dos alunos.
                    <br> <br>
                    Agora, o ambiente escolar foi transformado em um labirinto vivo — onde perguntas viram batalhas,
                    erros se tornam desafios e cada acerto reacende um pedaço do Kairós perdido.
                    Diante desse caos, um estudante comum recebe uma missão extraordinária: recuperar os fragmentos da
                    joia, derrotar os Inimigos das Disciplinas e restaurar o equilíbrio da Academia. Ele não estará
                    sozinho — um misterioso Faxineiro, guardião silencioso da escola, surge como seu guia.
                    <br> <br>
                    No Kairoo, aprender não é apenas estudar.
                    É explorar, enfrentar, evoluir…
                    E descobrir que todo aluno pode ser o herói da própria história.
                </p>
            </div>
        </section>
        <section id="gradient4"></section>
        <section id="gradient5"></section>
        <section id="gradient6"></section>

        <section class="section" id="characters">

        </section>
    </main>

    <script src="assets/js/observer.js"></script>
</body>

</html>