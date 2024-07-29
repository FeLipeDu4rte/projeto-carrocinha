<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: linear-gradient(to bottom, #000000, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif; /* Escolha uma fonte apropriada */
            color: #ffffff;
            text-align: center;
        }

        .container {
            background-color: #333333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            margin-top: 20px;
        }

        p {
            margin-top: 20px;
        }

        a {
            color: #ffffff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            include('include/conexao.php');

            // Verifica se os dados foram enviados pelo formulário
            if (isset($_POST['nome'], $_POST['email'])) {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $endereco = $_POST['endereco'];
                $bairro = $_POST['bairro'];
                $cep = $_POST['cep'];
                $cidade = $_POST['cidade'];

                // Inserção no banco de dados
                $sql = "INSERT INTO Pessoa (nome, email, endereco, bairro, cep, cidade_id) VALUES ('$nome', '$email', '$endereco', '$bairro', '$cep', '$cidade')";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    echo "<h1>Dados do Cliente</h1>";
                    echo "<p>Nome: $nome</p>";
                    echo "<p>Email: $email</p>";
                    echo "<p>Endereço: $endereco</p>";
                    echo "<p>Bairro: $bairro</p>";
                    echo "<p>Cep: $cep</p>";
                    echo "<h2>Dados cadastrados com sucesso!</h2>";
                } else {
                    echo "<h2>Erro ao cadastrar!</h2>";
                    echo "<p>" . mysqli_error($con) . "</p>";
                }
            } else {
                echo "<h2>Nenhum dado enviado.</h2>";
            }
        ?>
        <p><a href="index.html">Voltar</a></p>
    </div>
</body>
</html>