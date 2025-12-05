<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kairoo | Criar conta</title>
    <link rel="stylesheet" href="../public/assets/css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="shortcut icon" href="../public/assets/ico/ico.png" type="image/x-icon">
</head>

<body>
    <div class="justify-content-start m-3">
        <a class="border border-3 border-white rounded-pill d-flex align-items-center border p-1 px-3 back"
            href="../public/index.php">
            VOLTAR
        </a>
    </div>

    <main class="d-flex justify-content-center pt-5">
        <form action="../backend/process_register.php" method="post"
            class="flex-column formBox p-5 needs-validation d-flex justify-content-center align-items-center gap-3"
            novalidate>
            <img src="../public/assets/img/kairooLogo.png" class="img">

            <div class="form-floating inputWidth">
                <input type="text" name="name_user" class="form-control border border-0 rounded-pill" id="floatingInput"
                    placeholder="name user" required>
                <label for="floatingInput" class="form-label px-3 poppins">Nome de Usuário</label>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating inputWidth">
                <input type="email" name="email_user" class="form-control border border-0 rounded-pill"
                    id="floatingInput" placeholder="email" required>
                <label for="floatingInput" class="form-label px-3 poppins">E-mail</label>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating inputWidth">
                <input type="password" name="password_user" class="form-control border border-0 rounded-pill"
                    id="floatingInput" placeholder="password" required>
                <label for="floatingInput" class="form-label px-3 poppins">Senha</label>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating inputWidth">
                <input type="password" name="confirm_password" class="form-control border border-0 rounded-pill"
                    id="floatingInput" placeholder="confirm password" required>
                <label for="floatingInput" class="form-label px-3 poppins">Confirmar Senha</label>

                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <button type="submit"
                class="poppins py-3 border border-0 rounded-pill submit-btn inputWidth fw-bold text-white">Criar
                Conta</button>

            <a href="../public/login.php" class="text-decoration-none text-white poppins">Já possui uma conta? <span
                    class="fw-bold">Entrar</span></a>

        </form>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="../public/assets/js/inputFeedback2.js"></script>

</body>

</html>