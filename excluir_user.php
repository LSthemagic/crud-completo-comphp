<?php
        $servidor = "localhost";
        $usuario = "id20603392_dev";
        $senha = "T*Tyd-R&ly>FqQW4";
        $dbname = "id20603392_cadastro";

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname); 

	if (isset($_POST['id'])) {
        if (strlen($_POST['id'] ) == 0 ) {
            echo"<script>window.alert('Digite o id do Usuário')</script>";
            
        }else {
            
 
	$result_usuario = "DELETE FROM `informes` WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
        }
    } else {
        echo"<script>window.alert('Digite o id')</script>";
        
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Alteração de Usuário</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="posExcluir.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1>Usuário Excluído!</h1>
    <br>
    <h2>Redirecione-se para a tela anterior</h2>
    <a href="javascript:history.back()" class="btn btn-primary">Voltar</a>
    <br>
    <a href="pesquisarUser.html" class="btn btn-primary">Pesquisar Usuário</a>
    <br>
    <a href="cadastro.html" class="btn btn-primary">Cadastrar Usuário</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>