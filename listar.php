<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>
    <div>
        <?php
            include('include/conexao.php');
            $sql = "SELECT pe.id, pe.nome, pe.email, pe.endereco, pe.bairro, pe.cep,
                    cid.nomecidade, cid.estado
                    FROM Pessoa pe
                    LEFT JOIN Cidade cid ON cid.id = pe.cidade_id";

            $result = mysqli_query($con, $sql);

            if (!$result) {
                die("Erro na consulta SQL: " . mysqli_error($con));
            }
        ?>
        <div class="container">
        <h1>Consulta de Clientes</h1>
        <table align="center" border="1" width="500">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cep</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['cep']."</td>";
                    echo "<td><a href='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='deletarCliente.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <div class="footer">
            <p><a href="index.html">Voltar</a></p>
        </div>
        </div>
    </div>
    <div>
        <?php
            include('include/conexao.php');
            $sql = "SELECT * FROM Cidade";

            $result = mysqli_query($con, $sql);

            if (!$result) {
                die("Erro na consulta SQL: " . mysqli_error($con));
            }
        ?>
        <div class="container">
            <h1>Consulta de Cidades</h1>
            <table align="center" border="1" width="500">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['nomecidade']."</td>";
                        echo "<td>".$row['estado']."</td>";
                        echo "<td><a href='alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
                        echo "<td><a href='deletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <div class="footer">
                <p><a href="index.html">Voltar</a></p>
            </div>
        </div>
    </div>
    <div>
        <?php
            include('include/conexao.php');
            $sql = "SELECT * FROM Animal";

            $result = mysqli_query($con, $sql);

            if (!$result) {
                die("Erro na consulta SQL: " . mysqli_error($con));
            }
        ?>
        <div class="container">
            <h1>Consulta de Animais</h1>
            <table align="center" border="1" width="500">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Espécie</th>
                    <th>Raça</th>
                    <th>Data de Nascimento</th>
                    <th>Idade</th>
                    <th>Castrado</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['nome']."</td>";
                        echo "<td>".$row['especie']."</td>";
                        echo "<td>".$row['raca']."</td>";
                        echo "<td>".$row['dt_nascimento']."</td>";
                        echo "<td>".$row['idade']."</td>";
                        echo "<td>".($row['castrado'] == 1 ? 'Sim': 'Não')."</td>";
                        echo "<td><a href='alteraAnimal.php?id=".$row['id']."'>Alterar</a></td>";
                        echo "<td><a href='deletaAnimal.php?id=".$row['id']."'>Deletar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <div class="footer">
                <p><a href="index.html">Voltar</a></p>
            </div>
        </div>
    </div>
</body>
</html>


