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
        $result = $mysqli -> query("SELECT * from departamento");
    ?>

    <form action="./src/process.php" method="post">
        <div class="input-group">
            <input
                type="text"
                name="funcionario"
                placeholder="Nome do Funcionario"
            />
        </div>
        <div class="input-group">
            <select name="departamento">
                <?php while($row = $result -> fetch_assoc()):?>
                <option value="<?php echo $row['iddepartamento']; ?>"><?php echo $row['nome_departamento']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="input-group">
            <a href="./index.php">
                <button
                type="submit"
                name="salvar">
                    Salvar    
                </button>
            </a>
            <a href="./index.php">
                <button
                type="submit"
                >
                    Voltar    
                </button>
            </a>
        </div>
    </form>
    
</body>
</html>