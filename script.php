<?php
    session_start();

    $categorias = [];
    $categorias[] = "infantil";
    $categorias[] = "adolescente";
    $categorias[] = "adulto";

    //print_r($categorias);

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    //var_dump($nome);
    //var_dump($idade);

    /**
     * validadores
    */
    if(empty($nome)){
        $_SESSION['messagem-de-erro'] = "O nome não pode ser vazio, por favor preencha o novamente";
        header('location: index.php');
        return;
    }

    if(strlen($nome) < 3){
        $_SESSION['messagem-de-erro'] = "O nome deve conter mais de 2 caracteres";
        header('location: index.php');
        return;
    }

    if(strlen($nome) > 40){
        $_SESSION['messagem-de-erro'] = "O nome é muito extenso";
        header('location: index.php');
        return;
    }

    if(!is_numeric($idade)){
        $_SESSION['messagem-de-erro'] = "Informe um número para idade";
        header('location: index.php');
        return;
    }

    if($idade >= 6 && $idade <= 12){
        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == 'infantil'){
                $_SESSION['messagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
                header("location: index.php");
                return;
            }
        }
    }else if($idade >= 13 && $idade <= 18){
        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == 'adolescente'){
                $_SESSION['messagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
                header("location: index.php");
                return;
            }
        }
    }else{
        for($i = 0; $i < count($categorias); $i++){
            if($categorias[$i] == 'adulto'){
                $_SESSION['messagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
                header("location: index.php");
                return;
            }
        }
    }

?>