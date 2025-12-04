<?php
session_start();

$type_user = $_SESSION['type_user'] ?? 'GUEST';
$logado = $_SESSION['logado'] ?? false;

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kairoo | Jogar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <link rel="stylesheet" href="../public/assets/css/navbar.css" />
    <link rel="stylesheet" href="../public/assets/css/createRoom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </head>

  <body>
    <?php include_once("../includes/navbar_createRoom.php"); ?>


  <main class="container-fluid">
      <div class="row firstStep d-none">
        <div class="col-12 d-flex justify-content-center pt-3">
          <form action="" method="post" class="box1">
            <div class="title p-3 mb-4">
              <h1>CRIAR SALA</h1>
            </div>

            <div class="d-flex flex-column gap-2 p-4 py-0 mb-4">
              <label for="roomName">Nome da Sala</label>
              <input type="text" name="roomName" id="roomName" class="p-2 text-white" required />
            </div>

            <div class="d-flex flex-column gap-2 p-4 py-0 mb-4">
              <label for="roomDisciplina">Disciplina</label>
              <select name="roomDisciplina" id="roomDisciplina" class="p-2 text-white">
                <option value="matematica">Matemática</option>
                <option value="portugues">Português</option>
                <option value="ciencias">Ciências</option>
                <option value="historia">História</option>
                <option value="geografia">Geografia</option>
                <option value="ingles">Inglês</option>
              </select>
            </div>

            <div class="d-flex flex-column gap-2 p-4 py-0 mb-4">
              <label for="roomDisciplina">Quantidade de Perguntas</label>
              <input type="number" name="n_questions" id="n_questions" class="p-2 text-white" style="width: 20%" />
            </div>

            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
              <button type="button" class="btn btn-primary p-2 btnNextStep">PROXIMO</button>
            </div>
          </form>
        </div>
      </div>

      <div class="row secondStep animate__animated animate__fadeInUpBig">
        <div class="col-12 d-flex justify-content-center pt-3">
          <form action="" method="post" class="box1">
            <div class="title p-3 mb-4">
              <h1>ADICIONAR<br />PERGUNTA</h1>
            </div>

            <div class="d-flex flex-column gap-2 p-4 py-0 mb-4">
              <label for="roomQuestion">Pergunta</label>
              <input type="text" name="roomQuestion" id="roomQuestion" class="p-2 text-white" required />
            </div>

            <div class="d-flex flex-column gap-2 p-4 py-0 mb-4">
              <label for="roomDifficulty">Dificuldade</label>
              <select name="roomDifficulty" id="roomDifficulty" class="p-2 text-white">
                <option value="easy">Fácil</option>
                <option value="medium">Médio</option>
                <option value="hard">Difícil</option>
              </select>
            </div>

            <div class="d-flex flex-row align-items-center justify-content-center mb-4">
              <button type="button" class="btn btn-primary p-2 btnBackQuestion">VOLTAR</button>
              <button type="button" class="btn btn-primary p-2 btnNextQuestion">PROXIMO</button>
            </div>
          </form>
        </div>
      </div>
    </main>

    <script>
      const btnNextStep = document.querySelector('.btnNextStep');
      const btnNextQuestion = document.querySelector('.btnNextQuestion');
      const firstStep = document.querySelector('.firstStep');
      const secondStep = document.querySelector('.secondStep');

      btnNextStep.addEventListener('click', () => {
        firstStep.classList.add('d-none');
        secondStep.classList.remove('d-none');
      });

      btnNextQuestion.addEventListener('click', () => {
        alert('Próxima pergunta!');
      });
    </script>
  </body>
</html>
