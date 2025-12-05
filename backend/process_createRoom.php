<?php
session_start();
require_once 'connection.php';

$nome_sala     = mysqli_real_escape_string($connection, $_POST['nome_sala'] ?? '');
$id_disciplina = mysqli_real_escape_string($connection, $_POST['id_disciplina'] ?? 0);
$qtd_perguntas = mysqli_real_escape_string($connection, $_POST['qtd_perguntas'] ?? 0);
$id_user       = mysqli_real_escape_string($connection, $_POST['id_user'] ?? 1);
$perguntas     = $_POST['perguntas'] ?? [];
$status        = 'aberta';

$codigo_sala = strtoupper(substr(md5(uniqid(rand(), true)), 0, 6));

$query_sala = "INSERT INTO salas (codigo_sala, nome_sala, id_disciplina, qtd_perguntas, status) 
               VALUES ('$codigo_sala', '$nome_sala', '$id_disciplina', '$qtd_perguntas', '$status')";

if (!mysqli_query($connection, $query_sala)) {
    // Se falhar, é crucial interromper e reportar o erro
    die("Erro ao inserir sala. Verifique se o ID da disciplina ($id_disciplina) existe na sua tabela 'disciplinas'. Detalhe: " . mysqli_error($connection));
}
$id_sala = mysqli_insert_id($connection);

// Vincular Professor à Sala (tabela prof_salas)
$query_prof_sala = "INSERT INTO prof_salas (id_sala, id_user)
                    VALUES ('$id_sala', '$id_user')";

if (!mysqli_query($connection, $query_prof_sala)) {
    die("Erro ao vincular professor: " . mysqli_error($connection));
}

foreach ($perguntas as $p) {
    $titulo = mysqli_real_escape_string($connection, $p['titulo']);
    $nivel  = mysqli_real_escape_string($connection, $p['nivel']);

    $query_pergunta = "INSERT INTO perguntas (id_sala, descricao, nivel) 
                       VALUES ('$id_sala', '$titulo', '$nivel')";

    if (!mysqli_query($connection, $query_pergunta)) {
        die("Erro ao inserir pergunta: " . mysqli_error($connection));
    }
    $id_pergunta = mysqli_insert_id($connection);

    $indice_correta  = (int)($p['correta'] ?? -1);
    $respostas_texto = $p['respostas'];

    foreach ($respostas_texto as $index => $texto_resposta) {
        $texto_escaped = mysqli_real_escape_string($connection, $texto_resposta);
        $eh_correta = ($index == $indice_correta) ? 1 : 0;

        $query_resposta = "INSERT INTO respostas (id_pergunta, descricao, tipo) 
                           VALUES ('$id_pergunta', '$texto_escaped', '$eh_correta')";

        if (!mysqli_query($connection, $query_resposta)) {
            die("Erro ao inserir resposta: " . mysqli_error($connection));
        }
    }
}

mysqli_close($connection);

header("Location: ../pages/roomCode.php?codigo=" . $codigo_sala);
exit;
