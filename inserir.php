<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $dtnascimento = $_POST['dtnascimento'];
    $email = $_POST['email'];

    $query = "INSERT INTO aluno (nome, sexo, dtnascimento, email)
          VALUES ('$nome', '$sexo', '$dtnascimento', '$email')";

    $result = pg_query($conn, $query);

    if ($result) {
        echo "✅ Aluno cadastrado com sucesso!";
    } else {
        echo "❌ Erro ao inserir dados: " . pg_last_error($conn);
    }

    pg_close($conn);
}
?>
