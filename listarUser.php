<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listar.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Pesquisa de Usuário</title>
</head>
<body>
    <h1>Dados do usuário</h1>
        <div class="lista">
            <?php
                        $servidor = "localhost";
                        $usuario = "id20603392_dev";
                        $senha = "T*Tyd-R&ly>FqQW4";
                        $dbname = "id20603392_cadastro";

                    $mysqli = new mysqli($servidor,$usuario,$senha,$dbname);

                    $nome = $_POST['nome'];
                        if ($nome == "") {
                            
                            echo"<script>window.alert('USUÁRIO INEXISTENTE')</script>";
                        }else{
                    $resultado = "SELECT * FROM informes  WHERE f_nome LIKE '%$nome%' LIMIT 5";
                    $busca=mysqli_query($mysqli,$resultado);
                           
                    while ($linhas = mysqli_fetch_array($busca)) {
                        echo"<h2> ID: </h2>".$linhas['id']."";
                        echo"<h2> NOME: </h2>".$linhas['f_nome']."";
                        echo"<h2> DATA DE NASCIMENTO:</h2>".$linhas['f_data']."";
                        echo"<h2> EMAIL:</h2>".$linhas['f_email']."";
                        echo"<h2> CPF:</h2>".$linhas['f_cpf']."";
                        echo"<h2> TELEFONE:</h2>".$linhas['f_tel']."";
                    }
                    
                }
            
                ?>
        </div>  
                <button type="menu" class="buton" > <a class="buton" href="pesquisarUser.html">VOLTAR</a> </button>
</body>
</html>