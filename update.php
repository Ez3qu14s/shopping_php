<?php
    require_once './src/process.php';

    if(isset($_GET['idfuncionario'])) {
        $id = $_GET['idfuncionario'];
        $result = $mysqli -> query("SELECT * FROM funcionario WHERE idfuncionario = $id");
        $result2 = $mysqli -> query("SELECT * FROM departamento");
        $data = $result -> fetch_assoc();
        // $data2 = $result2 -> fetch_assoc();
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
<form action="./src/process.php" method="post">
            <div class="input-group">
                <label for="">Funcionario</label>
                <input
                    type="text"
                    name="funcionario"
                    placeholder="Nome do Funcionario"
					value="<?php echo $data['nome_funcionario'] ?>"
                />
            </div>
            <div class="input-group">
                <label for="">departamento</label>
                <select name="departamento">
                <?php while($row = $result2 -> fetch_assoc()):?>
                    <option value="<?php echo $row['iddepartamento']; ?>"><?php echo $row['nome_departamento']; ?></option>
                    <?php endwhile; ?>
                </select>

            </div>

			<input type="hidden" name="id" value="<?php echo $data['idfuncionario'] ?>"/>
            
            <div class="input-group">
                    <button
                    type="submit"
                    name="salvarAlteracao"
					href="./index.php"
                    >
                        Salvar alterações
                    </button>

                    <a href="./index.php">
                        <button
                        type="button"
                        >
                            Voltar
                        </button>
                    </a>
                   
            </div>
            
            
        </form>
</body>
</html>
<?php
    }
?>