<?php
session_start();

$type_user = $_SESSION['type_user'] ?? 'GUEST';
$logado = $_SESSION['logado'] ?? false;

$id_user = $_SESSION['id_user'] ?? 1;

$disciplinas = [
  1 => 'Matemática',
  2 => 'Português',
  3 => 'Ciências',
  4 => 'História',
  5 => 'Geografia',
  6 => 'Inglês',
];

$codigo_sala = htmlspecialchars($_GET['codigo'] ?? 'ERRO');

if ($logado && $type_user == 'TEACHER') {
?>

  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kairoo | Criar Sala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../public/assets/css/navbar.css" />
    <link rel="stylesheet" href="../public/assets/css/createRoom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="../public/assets/ico/ico.png" type="image/x-icon">
  </head>

  <body>
    <?php include_once("../includes/navbar_createRoom.php"); ?>

    <main class="container-fluid">
      <form method="post" action="../backend/process_createRoom.php">

        <input type="hidden" name="id_user" value="<?php echo htmlspecialchars($id_user); ?>">

        <div class="row firstStep animate__animated animate__bounceIn">
          <div class="col-12 d-flex justify-content-center pt-3">
            <div class="box1">
              <div class="title  p-3 mb-4">
                <h1>CRIAR SALA</h1>
              </div>

              <div class="d-flex flex-column gap-2 p-4 py-0 mb-4">
                <label for="roomName">Nome da Sala</label>
                <input type="text" name="nome_sala" id="roomName" class="p-2 text-white" required />
              </div>

              <div class="d-flex flex-column gap-2 p-4 py-0 mb-4">
                <label for="roomDisciplina">Disciplina</label>
                <select name="id_disciplina" id="roomDisciplina" class="p-2 text-white">
                  <?php foreach ($disciplinas as $id => $nome): ?>
                    <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="d-flex flex-column gap-2 p-4 py-0 mb-4">
                <label for="n_questions">Quantidade de Perguntas</label>
                <input type="number" name="qtd_perguntas" id="n_questions" class="p-2 text-white" style="width: 50%" min="1" max="20" required />
              </div>

              <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <button type="button" class="btn btn-primary p-3 btnNextStep">PROXIMO</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row secondStep d-none animate__animated animate__bounceIn">
          <div class="col-12 d-flex justify-content-center pt-3">
            <div class="box1 d-flex align-items-center flex-column">
              <div class="title p-3 mb-4 text-center">
                <h1 class="fs-3">ADICIONAR PERGUNTAS</h1>
              </div>

              <div id="questionsContainer" class="p-4 py-0 content"></div>

            </div>
          </div>
        </div>

      </form>

      <div class="row finalStep animate__animated animate__bounceIn d-none">
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

    </main>

    <script src="../public/assets/js/createRoom.js"></script>
  </body>

  </html>
<?php
}
?>