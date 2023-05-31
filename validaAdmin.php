<?php
    /*Chama a conexão php*/
    include('conexao.php'); //inclui a conexão na pagin a para não precisar repetir
    
    /*Verifica se a senha ou email foram preenchidos.*/
    if (isset($_POST['email']) || isset($_POST['senha'])) { //isset == existe
        
            /*Verifica se a senha ou email estão em branco.*/
            if (strlen($_POST['email']) == 0) {
                echo "<script>
                window.alert('PREENCHA SEU EMAIL!')
                </script>";
                
                
            }elseif (strlen($_POST['senha']) == 0) {
                echo "<script>
                window.alert('PREENCHA SUA SENHA!')
                </script>";
                

            }else {
            
                /*Captura email e senha via post*/
                $email = $mysqli->real_escape_string($_POST['email']);
                $senha = $mysqli->real_escape_string($_POST['senha']);

                /*Executa a seleção*/
                $sql_code = "SELECT * FROM informes WHERE f_email = '$email' AND f_senha = '$senha'";
                $sql_query = $mysqli->query($sql_code) or die("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error);

                $quantidade = $sql_query->num_rows;
                /*Se a seleção encontrar o registro a quantidade será 1 */
                //até pq os emails são diferentes
                
                if ($quantidade == 1) {
                    /*Associa a consulta ao usuário*/
                    $usuario = $sql_query->fetch_assoc(); //associação ao usuário
                    /*Inicia a sessão*/
                    if((strcmp($_POST['email']) != "admsenai00@ba.admti.senai.br") or (strcmp($_POST['senha']) != "scriptxz") ) {
                        echo "<script>
                        window.alert('EMAIL OU SENHA INCORRETOS!')
                        </script>";
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    /*Guarda o id e o usuário na sessão*/
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['id'];
                    /*Redireciona para a página painel.php*/
                    header("Location: paginaprinc.php");
                }else {
                    echo "<script>
                    window.alert('FALHA AO LOGAR! EMAIL OU SENHA INCORRETOS')
                    </script>";
                }



            }

        }


    }
?>