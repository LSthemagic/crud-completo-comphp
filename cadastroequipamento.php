<?php
  include('protecao.php');
  include('valida.php');
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Equipamento</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cadastroequip.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1>Cadastro de Equipamento - Senai</h1>
    
    <form action="adicionar.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome do responsável</label>
          <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo do equipamento</label>
            <select class="form-control" name="tipo" id="options" required>
                <option value=""></option>
                <option value="Gabinete">Gabinete</option>
                <option value="Monitor">Monitor</option>
                <option value="Monitor">PC completo</option>
                <optgroup value="Periféricos" label="Periféricos">
                        <option >Teclado</option>
                        <option >Mouse</option>
                        <option >Câmera digital</option>
                        <option >WebCam</option>
                        <option >Alto-falantes</option>
                        <option >Impressoras</option>
                </optgroup>
                <optgroup value="Hardware" label="Hardware">
                        <option >Memória secundária</option>
                        <option >Placa mãe</option>
                        <option >Memória RAM</option>
                        <option >Placa de video</option>
                        <option >processador</option>
                        <option >coolers</option>
                        <option >cabos internos</option>
                        <option >fonte</option>
                        <option >unidades ópticas</option>
                        <option >HD externo</option>
                </optgroup>
                

                <script>
                 
                  $('options').change(function(){
                      if(this.value == 'Periféricos'){ // or this.value == 'volvo'
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Setor</label>
                            <input type="text" name="setor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> 
                      }
                    });
                 
                </script>
                  
                
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Unidade da instituição</label>
            <select class="form-control" name="unidade" id="" required>
                <option value=""></option>
                <option value="Barreiras">Barreiras</option>
                <option value="Feira de Santana">Feira de Santana</option>
                <option value="Alagoinhas">Alagoinhas</option>
                <option value="Camaçari">Camaçari</option>
                <option value="Cimatec">Cimatec</option>
                <option value="Vitória da Conquista">Vitória da Conquista</option>
                <option value="Dendezeiros">Dendezeiros</option>
                <option value="Ilhéus">Ilhéus</option>
                <option value="Juazeiro">Juazeiro</option>
                <option value="Lauro de Freitas">Lauro de Freitas</option>
                <option value="LEM">LEM</option>
                <option value="Serrinha">Serrinha</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Setor</label>
            <input type="text" name="setor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

        </div>
        <div class="butoes">
        <button  type="submit" class="btn btn-primary">ENVIAR</button>
        <button type="reset" class="btn btn-primary">LIMPAR</button>
        <a name="" id="" class="btn btn-primary" href="paginaprinc.php" role="button">VOLTAR</a>
      </div>
      </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>