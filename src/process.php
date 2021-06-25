<?php

$host = "localhost";
$db = "shopping_crud";
$user = "root";
$senha = "";

$mysqli = new mysqli($host, $user, $senha, $db);

if($mysqli -> connect_error) {
    die("conexão falhou". $mysqli -> connect_error);
} else {
    
}

$nome_funcionario = "";

if(isset($_POST['salvar'])) {
    $nome_funcionario = $_POST['funcionario'];
    $iddepartamento = $_POST['departamento'];

    $mysqli -> query("INSERT INTO funcionario (nome_funcionario, departamento_iddepartamento) VALUES ('$nome_funcionario', '$iddepartamento')");

    header('location: ../index.php');
    exit;
}

if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $mysqli -> query("DELETE FROM funcionario WHERE idfuncionario = $id") or die($mysqli -> error());

    if($mysqli -> error) {
        echo "Erro ao excluir o registro: ".$connect->error;
    }
    header('location: ../index.php');
    exit;
}

if(isset($_POST['salvarAlteracao'])) {
    $id = $_POST['id'];
    $nome_funcionario = $_POST['funcionario'];
    $iddepartamento = $_POST['departamento'];

    $mysqli -> query("UPDATE funcionario SET nome_funcionario = '$nome_funcionario', departamento_iddepartamento = '$iddepartamento' WHERE idfuncionario = '$id'") or die($mysqli -> error);
    header('location: ../index.php');
    exit;
}

?>