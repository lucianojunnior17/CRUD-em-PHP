<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Listagem de Produtos </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3> Lista de Produtos </h3>
            <br>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      
      <th scope="col">Ação </th>

    </tr>
  </thead>

    
            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM `categoria`";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $id_categoria = $array['id_categoria'];
                    $categoria = $array['categoria'];                  

            ?>

        <tr>

        <td><? php  $categoria  ?> </td>

        <td> <a class="btn btn-warning btn-sm" style="color:#ffff" href="editar_produto.php?id=<?php
            echo $id_estoque ?>" role="button"><i class="fas fa-edit"></i>Editar</a>
             <a class="btn btn-danger btn-sm" style="color:#ffff" href="deletar_produto.php?id=<?php
            echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
            
        </td>
            


            <?php } ?>
     
    </tr>
   
  
</table>

            <div style="text-align: right">
            <a href="index.php" role="button" class="b btn-sm btn-primary"> Voltar</a>
                </div>

        </div>


            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>    
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
