    <nav class="justify-content-between d-flex align-items-center p-3 fixed-top">
        <img src="../public/assets/img/leakedLogo.png" id="logoImg">

        <ul class="nav d-flex align-items-center gap-5">
            <li>
                <a href="../public/index.php" class="link" id="link-start">INICIO</a>
            </li>

            <li>
                <a href="../public/index.php" class="link" id="link-about">SOBRE</a>
            </li>

            <li>
                <a href="../public/index.php" class="link" id="link-history">HISTORIA</a>
            </li>

            <li>
                <a href="../public/index.php" class="link" id="link-characters">PERSONAGENS</a>
            </li>

            <?php
            if ($logado && $type_user == 'TEACHER') {
            ?>
                <li>
                    <a href="#CriarSala" class="link">CRIAR SALA</a>
                </li>
            <?php
            }
            ?>

            <?php
            if ($logado && $type_user == 'STUDENT') {
            ?>
                <li>
                    <a href="#" class="link active">JOGAR</a>
                </li>
            <?php
            }
            ?>
        </ul>
        <?php
        if (!$logado) {
        ?>
            <a class="border border-3 border-white rounded-pill d-flex align-items-center border p-1 px-3 enter"
                href="../public/login.php">
                ENTRAR
            </a>
        <?php
        } else {
        ?>
            <a class="border border-3 border-white rounded-pill d-flex align-items-center border p-1 px-3 enter"
                href="../backend/process_logout.php">
                SAIR
            </a>
        <?php
        }
        ?>
    </nav>