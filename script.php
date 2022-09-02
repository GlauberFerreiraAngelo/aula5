<?php
    session_start();

    include "servicos/servicoCategoriaCompetidor.php";
    include "servicos/servicoMesangemSessao.php";
    include "servicos/servicoValidacao.php";

    
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    //var_dump($nome);
    //var_dump($idade);

    defineCategoriaCompetidor($nome, $idade);
    header('location: index.php');
?>