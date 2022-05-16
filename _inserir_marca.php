<?php

include 'conexao.php';

$marca = $_POST['marca'];

$sql = "INSERT INTO `marca`(`marca`) VALUES ('$marca')";

$inserir = mysqli_query($conexao, $sql);


?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container" style="width: 400px">

   <center>
      <h3>Marca adicionada com sucesso!</h3>
      <a href="adicionar_marca.php" class="btn btn-sm btn-warning">Voltar</a>
   </center>

</div>