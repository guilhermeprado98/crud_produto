<?php

include 'conexao.php';

$id = $_GET['id'];

?>


<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <title>Edição de Marcas</title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <style type="text/css">
   #tamanhoContainer {
      width: 500px;
   }

   #button-cadastrar {
      margin-top: 10px;
   }
   </style>


</head>

<body>

   <div class="container" id="tamanhoContainer" style="margin-top: 40px">
      <h4>Formulário de Edição</h4>

      <form action="atualizar_marca.php" method="post" style="margin-top: 20px;">

         <?php

         $sql = "SELECT * FROM `marca` WHERE id_marca = $id";

         $buscar = mysqli_query($conexao, $sql);

         while ($array = mysqli_fetch_array($buscar)) {
            $id_marca = $array['id_marca'];
            $marca = $array['marca'];
         ?>


         <div class="form-group">
            <label>Nome da Marca</label>
            <input type="text" name="marca" class="form-control" value="<?php echo $marca ?>">
            <input type="number" name="id_marca" class="form-control" value="<?php echo $id_marca ?>"
               style="display: none">
            <br>
         </div>

         <button type="submit" id="button-cadastrar" class="btn btn-warning">Atualizar</button>
         <div style="text-align: right; margin-top: -35px;">
            <a href="listar_marca.php" class="btn btn-warning">Voltar</a>
         </div>


         <?php
         } ?>

      </form>
   </div>


   <!-- JavaScript Bundle with Popper -->
   <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
   </script>

</body>

</html>