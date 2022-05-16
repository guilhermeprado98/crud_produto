<?php

include 'conexao.php';

$id = $_POST['id_marca'];

//$idproduto = $_POST['idproduto'];
$marca = $_POST['marca'];


$sql = "UPDATE `marca` SET `marca` = '$marca' WHERE id_marca = $id";


$atualizar = mysqli_query($conexao, $sql);


?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container" style="width: 400px">

   <center>
      <h3>Marca atualizada com sucesso!</h3>
      <a href="listar_marca.php" class="btn btn-sm btn-warning">Voltar</a>
   </center>

</div>