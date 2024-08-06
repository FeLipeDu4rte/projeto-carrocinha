<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Pessoa</title>
    <link rel="stylesheet" href="../altera.css">
</head>
<body>
    <header>
        <nav>
            <p><a href="index.html" id="home">Home</a>
            <a href="cadastrocidade.html">Cadastro Cidade</a>
            <a href="cadastropessoa.php">Cadastro Pessoa</a>
            <a href="cadastroAnimal.php">Cadastro Animal</a>
            <a href="listar.php">Listar Tabelas</a></p>
        </nav>
    </header>
    
    <main>
    <div class="container">
        <h1>Alterar Pessoa</h1>
        <?php
            include('../include/conexao.php');

            $id = $_GET['id'];
            $sql = "SELECT * FROM Pessoa WHERE id = $id";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
        ?>
        <form action="alteraPessoaExe.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <fieldset>
                <legend>Dados da Pessoa</legend>
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
                </div>
                <div>
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']; ?>">
                </div>
                <div>
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']; ?>">
                </div>
                <div>
                    <label for="cep">Cep:</label>
                    <input type="text" name="cep" id="cep" value="<?php echo $row['CEP']; ?>">
                </div>
                <div>
                    <label for="cidade">Cidade:</label>
                    <select name="cidade" id="cidade">
                    <?php
                        $sqlCidades = "SELECT * FROM Cidade";
                        $resultCidades = mysqli_query($con, $sqlCidades);
                        while($rowCidade = mysqli_fetch_array($resultCidades)){
                            $selected = ($rowCidade['id'] == $row['cidade_id']) ? 'selected' : '';
                            echo "<option value='".$rowCidade['id']."' $selected>".$rowCidade['nomecidade']."/".$rowCidade['estado']."</option>";
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
