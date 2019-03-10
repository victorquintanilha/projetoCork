<?php
    include_once('conexao_bd.php');

    $nome = $_POST['tNome'];
    $email = $_POST['tMail'];
    $assunto = $_POST['tAssunto'];
    $mensagem = $_POST['tMsg'];

    $result_msg_contato = "INSERT INTO mensagens(nome, email, assunto, mensagem, created) VALUES ('$nome', '$email', '$assunto', '$mensagem', NOW())";

    $resultado_msg_contato = mysqli_query($conn, $result_msg_contato)
?>