<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="utf-8">
        <title> Formulário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <style type="text/css">
            #tamanhoContainer {
                width: 500px;

            }  
        #botao {

            background-color: #ff1168;
            color: black;
            
        }    
        

        </style>
    </head>

    <body>
        
        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
                <h4> Formulários de Casdastro </h4>
        <form action="_inserir_produto.php" method="POST" style="margin-top: 20px;" >
                <div class="form-group">
                        <label>Nro Produto</label>
                        <input type="number"  class="form-control" name="nroproduto" placeholder="Insira o Número do Produto" autocomplete="off" required>
                        
                      </div>
                 <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text"  class="form-control" name="nomeproduto" placeholder="Insira o Nome do Produto" autocomplete="off" required>

                        </div>
                 <div class="form-group">
                            <label>Quantidade</label>
                            <input type="number"  class="form-control" name="quantidade" placeholder="Insira a Quantidade do Produto" required>
                            
                          </div>     
                  <div class="form-group">
                         <label >Categoria</label>
                         <select class="form-control" name="categoria" >
                         
                         
                         <?php
                         include 'conexao.php';
                         $sql = "SELECT * FROM categoria"; 
                         $buscar = mysqli_query($conexao,$sql);

                         while ($array = mysqli_fetch_array($buscar)) {

                              echo $id_categoria = $array['id_categoria'];
                              echo $nome_categoria = $array['categoria'];

                         ?>

                          <option><?php echo $nome_categoria ?></option>


                          <?php } ?>
                        </select>
                          </div>

                
                <div class="form-group">
                         <label >Fornecedor</label>
                        <select class="form-control" name="fornecedor">
                         <?php 
                         include 'conexao.php';
                         $sql2 = "SELECT * FROM fornecedor";
                         $buscar2 = mysqli_query($conexao,$sql2);

                         while ($array2  = mysqli_fetch_array($buscar2)) {
                             $id_fornecedor = $array2['id_form'];
                             $nome_fornecedor = $array2['nome_form'];
                             ?>

                                <option><?php echo $nome_fornecedor ?>  C</option>

                         <?php } ?>                 

                               </select>
                                 </div> 
                <div style="text-align: right;">             
                <button type="submit" id="botao" class="b btn-sm"> Casdastro</button>
            </div>
        </form>
<div style="text-align: rigth">
<a href="index.php" role="button" class="b btn-sm btn-primary"> Voltar</a>

    </div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>
</html>