<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Animal</title>
    <link rel="stylesheet" href="../altera.css">
</head>
<body>
    <header>
        <nav>
            <p><a href="../index.html" id="home">Home</a>
            <a href="../cadastrocidade.html">Cadastro Cidade</a>
            <a href="../cadastropessoa.php">Cadastro Pessoa</a>
            <a href="../cadastroAnimal.php">Cadastro Animal</a>
            <a href="../listar.php">Listar Tabelas</a></p>
        </nav>
    </header>
    
    <main>
    <div class="container">
        <h1>Alterar Animal</h1>

        <?php
            include('../include/conexao.php');
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM Animal WHERE id = $id";
                $result = mysqli_query($con, $sql);
                if ($row = mysqli_fetch_array($result)) {
                    $nome = $row['nome'];
                    $especie = $row['especie'];
                    $raca = $row['raca'];
                    $dt_nascimento = $row['dt_nascimento'];
                    $castrado = $row['castrado'];
                    $dono = $row['id_pessoa'];
                } else {
                    echo "<p>Animal não encontrado.</p>";
                    exit;
                }
            }
        ?>

        <form action="alteraAnimalExe.php" method="post">
            <fieldset>
                <legend>Dados do Animal</legend>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
                </div>
                <div>
                    <label for="especie">Espécie:</label>
                    <input type="text" name="especie" id="especie" value="<?php echo $especie; ?>">
                </div>
                <div>
                    <label for="raca">Raça:</label>
                    <input type="text" name="raca" id="raca" value="<?php echo $raca; ?>">
                </div>
                <div>
                    <label for="dt_nascimento">Data de Nascimento:</label>
                    <input type="date" name="dt_nascimento" id="dt_nascimento" value="<?php echo $dt_nascimento; ?>">
                </div>
                <div>   
                    <input type="checkbox" id="castrado" name="castrado" value="1" <?php echo ($castrado == 1 ? 'checked' : ''); ?> />
                    <label for="castrado">Castrado</label>
                </div>
                <div>
                    <label for="dono">Dono:</label>
                    <select name="dono" id="dono">
                    <?php
                        $sql = "SELECT * FROM Pessoa";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['id']."'".($row['id'] == $dono ? 'selected' : '').">".$row['nome']." / ".$row['email']."</option>";
                        }
                    ?>
                    </select>
                </div>
                <div>
                    <button type="submit">Alterar</button>
                </div>
            </fieldset>
        </form>
    </div>
    </main>
    <footer>
        <p>@copywriting | Nuness</p>
    </footer>
</body>
</html>
