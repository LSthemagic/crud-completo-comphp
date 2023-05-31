<?php
        $servidor = "localhost";
        $usuario = "id20603392_dev";
        $senha = "T*Tyd-R&ly>FqQW4";
        $dbname = "id20603392_cadastro";

    $conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

    $f_nome = $_POST['f_nome'];
    $f_senha = $_POST['f_senha'];
    $f_data = $_POST['f_data'];
    $f_email = $_POST['f_email'];
    $f_cpf = $_POST['f_cpf'];
    $f_tel = $_POST['f_tel'];

    $sql = "insert into informes(f_nome,f_senha,f_data,f_email,f_cpf,f_tel)
    values ('{$f_nome}','{$f_senha}','{$f_data}','{$f_email}','{$f_cpf}','{$f_tel}')";

    mysqli_query($conn,$sql) or die ("ERRO AO TENTAR CADASTRAR!");
    mysqli_close($conn);

    header("Location: index.html");
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="2">
   <meta name="refresh" content="width=device-width, initial-scale=1.0"> 
    <title>Cadasttro executado</title>
</head>
<body>
    <h1>CADASTRO EXECUTADO</h1>
    <H2>VOCÊ SERÁ REDIRECIONADO A PAGINA DE LOGIN</H2>
</body>
</html>