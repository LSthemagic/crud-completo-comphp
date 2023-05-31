<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listar.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Pesquisa de Equipamentos</title>
</head>
<body>
    <h1>Dados</h1>
    <div class="lista">
            <?php

$servidor = "localhost";
$usuario = "id20603392_dev";
$senha = "T*Tyd-R&ly>FqQW4";
$dbname = "id20603392_cadastro";

                $mysqli = new mysqli($servidor,$usuario,$senha,$dbname);

                $tipo = $_POST['tipo'];
                $unidade = $_POST['unidade'];
                $setor = $_POST['setor'];

                if ($tipo == "" and $unidade == "" and $setor == "") {
                    echo"<script>window.alert('Preencha no mínimo um dos campos')</script>";
                }else {
                    $resultado = "SELECT * FROM equipamentos WHERE tipo LIKE '%$tipo%' AND
                    unidade LIKE '%$unidade%' AND setor LIKE '%$setor%' LIMIT 4";
                    
                    $busca=mysqli_query($mysqli,$resultado);


                    while ($linhas = mysqli_fetch_array($busca)) {
                        echo"<h2> RESPONSÁVEL: </h2>".$linhas['nome']." ";
                        echo"<h2> TIPO: </h2>".$linhas['tipo']." ";
                        echo"<h2> UNIDADE: </h2>".$linhas['unidade']." ";
                        echo"<h2> SETOR: </h2>".$linhas['setor']." ";
                        echo"";
                        
                    }

                }

            ?>
    </div>
</html>