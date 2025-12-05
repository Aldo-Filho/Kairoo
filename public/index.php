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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="assets/ico/ico.png" type="image/x-icon">
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

        <section class="section flex-wrap align-content-start" id="characters">
            <div class="my-5 pt-5">
                <img src="assets/img/charactersTitle.png" class="title">
            </div>

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner w">
                    <div class="carousel-item gap-5 active">
                        <div class="d-flex">
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/kairao.png" alt="">
                            </div>
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/kairona.png" alt="">
                            </div>
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/terragor.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item gap-5">
                        <div class="d-flex">
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/acidon.png" alt="">
                            </div>
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/cifrus.png" alt="">
                            </div>
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/eron.png" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item gap-5">
                        <div class="d-flex">
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/fortex.png" alt="">
                            </div>
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/syntax.png" alt="">
                            </div>
                            <div class="d-block">
                                <img class="cardCharacter w-100 d-block" src="assets/img/verbex.png" alt="">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="d-flex">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control" aria-hidden="true">
                            <img src="assets/img/left.png" alt="">
                        </span>
                        <span class="visually-hidden">Previous</span>

                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control m" aria-hidden="true">
                            <img src="assets/img/right.png" alt="">
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </main>

    <script src="assets/js/observer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>