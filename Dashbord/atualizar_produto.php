<?php

include 'conexao.php';

$id = $_POST['id'];
$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = UPDATE `estoque` SET ,`nomeproduto`=$nomeproduto, `categoria`=$categoria,`quantidade`=$quantidade,`fornecedor`=`fornecedor` WHERE id_estoque = $id;

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">

<<div class="container" style="width:400px">
<center>
    <h3>Atualizado com Sucesso</h3>
    <div style="margin-top: 10px">
    <a href="listar_produtos.php" class="btn btn-warning" style="color:#fff">Voltar</a>
 
 </center>
    
</div>