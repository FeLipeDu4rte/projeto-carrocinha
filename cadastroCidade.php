<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Cidade</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <?php
        include('include/conexao.php');
        
        // Verifica se os dados foram recebidos via POST
        if(isset($_POST['nome'], $_POST['estado'])) {
            $nome = $_POST['nome'];
            $estado = $_POST['estado'];

            // Query para inserir os dados na tabela 'cidade'
            $sql = "INSERT INTO cidade (nomecidade, estado) VALUES ('$nome', '$estado')";
            $result = mysqli_query($con, $sql);

            // Verifica se a inserção foi bem sucedida
            if($result) {
                echo "<div class='container'>";
                echo "<h1>Dados da cidade</h1>";
                echo "<p>Nome: $nome</p>";
                echo "<p>Estado: $estado</p>";
                echo "<h2>Dados cadastrados com sucesso!</h2>";
                echo "</div>";
            } else {
                echo "<div class='container'>";
                echo "<h2>Erro ao cadastrar!</h2>";
                echo "<p>" . mysqli_error($con) . "</p>";
                echo "</div>";
            }
        } else {
            // Caso os dados não tenham sido recebidos corretamente
            echo "<div class='container'>";
            echo "<h2>Dados inválidos ou não recebidos.</h2>";
            echo "</div>";
        }
    ?>
    <div class="footer">
        <p><a href="index.html">Voltar</a></p>
    </div>
</body>
</html>