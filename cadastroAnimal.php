<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
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
            <h1>Cadastro de Animal</h1>

            <form action="cadastroAnimalExe.php" method="post">
                <fieldset>
                    <legend>Dados do Animal</legend>
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div>
                        <label for="especie">Especie:</label>
                        <input type="text" name="especie" id="especie">
                    </div>
                    <div>
                        <label for="raca">Raça:</label>
                        <input type="text" name="raca" id="raca">
                    </div>
                    <div>
                        <label for="dt_nascimento">Data de Nascimento:</label>
                        <input type="date" name="dt_nascimento" id="dt_nascimento">
                    </div>
                    <div>   
                        <input type="checkbox" id="ativo" name="ativo" value="1" checked />
                        <label for="ativo">Castrado</label>
                    </div>
                    <div>
                        <label for="dono">Dono:</label>
                        <select name="dono" id="dono">
                        <?php
                            include('include/conexao.php');
                            $sql = "SELECT * FROM Pessoa";
                            $result = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($result)){
                                echo "<option value='".$row['id']."'>".$row['nome']." / ".$row['email']."</option>";
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