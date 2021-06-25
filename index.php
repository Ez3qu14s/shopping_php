<?php require_once './src/process.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $result = $mysqli -> query("SELECT f.idfuncionario, f.nome_funcionario, d.nome_departamento FROM funcionario as f, departamento as d WHERE f.departamento_iddepartamento = d.iddepartamento");
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Nome do funcionário</th>
                <th>Nome do departamento</th>
            </tr>
        </thead>

            <?php while($row = $result -> fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['nome_funcionario']; ?></td>
                <td><?php echo $row['nome_departamento']; ?></td>
                <td>
                <a href="update.php?idfuncionario=<?php echo $row['idfuncionario']; ?>"><button>Editar</button></a>
                <a href="remove.php?idfuncionario=<?php echo $row['idfuncionario']; ?>" name="<?php echo $row['idfuncionario']; ?>"><button>Remover</button></a></td>
            </tr>
            <?php endwhile; ?>
    </table>

    <a href="./create.php"><button type="button">Adicionar funcionario</button></a>
    
</body>
</html>