<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site Básico</title>
    <link rel="stylesheet" href="style.css">
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
        <h1>Cadastro de Pessoas</h1>

        <form action="CadastropessoaExe.php" method="post">
            <fieldset>
                <legend>Dados da Pessoa</legend>
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="endereço">Endereço:</label>
                    <input type="text" name="endereco" id="endereco">
                </div>
                <div>
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" id="bairro">
                </div>
                <div>
                    <label for="senha">Cep:</label>
                    <input type="text" name="cep" id="cep">
                </div>
                <div>
                    <label for="cidade">Cidade</label>
                    <select name="cidade" id="cidade">
                    <?php
                        include('include/conexao.php');
                        $sql = "SELECT * FROM Cidade";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['id']."'>".$row['nomecidade']."/".$row['estado']."</option>";
                        }
                    ?>
                    </select>
                </div>
                <div>
                    <button type="submit">Cadastrar</button>
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