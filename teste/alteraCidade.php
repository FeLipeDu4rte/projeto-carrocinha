<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cidade</title>
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
        <h1>Alterar Cidade</h1>

        <?php
            include('../include/conexao.php');
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM Cidade WHERE id = $id";
                $result = mysqli_query($con, $sql);
                if ($row = mysqli_fetch_array($result)) {
                    $nomecidade = $row['nomecidade'];
                    $estado = $row['estado'];
                } else {
                    echo "<p>Cidade não encontrada.</p>";
                    exit;
                }
            }
        ?>

        <form action="alteraCidadeExe.php" method="post">
            <fieldset>
                <legend>Dados da Cidade</legend>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <label for="nomecidade">Nome da Cidade:</label>
                    <input type="text" name="nomecidade" id="nomecidade" value="<?php echo $nomecidade; ?>">
                </div>
                <div>
                    <label for="nome">Estado:<br></label>
                    <select name="estado" id="estado">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
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
