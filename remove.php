<?php
    require_once './src/process.php';

    if(isset($_GET['idfuncionario'])) {
        $id = $_GET['idfuncionario'];
        $result = $mysqli -> query("SELECT * FROM funcionario WHERE idfuncionario = $id");
        $data = $result -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form">
    <div class="title">
        <h3>Você realmente deseja excluir este funcionario: <?php echo $data['nome_funcionario']; ?>?</h3>
    </div>
    
        <form action="./src/process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['idfuncionario'] ?>" />
            <button type="submit" name="delete">Confirmar</button>
            <a href="index.php"><button type="button">Voltar</button></a>
        </form>
    </div>
</body>
</html>
<?php
    }
?>