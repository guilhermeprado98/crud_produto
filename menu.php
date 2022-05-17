<html>

<head>

   <title>Menu</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>


<body>

   <?php

   include 'conexao.php';

   session_start();
   $usuario = $_SESSION['usuario'];

   if (!isset($_SESSION['usuario'])) {
      header('Location: index.php');
   }

   $sql = "SELECT nivel_usuario FROM usuarios WHERE nome_usuario = '$usuario'";
   $buscar = mysqli_query($conexao, $sql);


   $array = mysqli_fetch_array($buscar);

   $nivel = $array['nivel_usuario'];

   ?>

   <div class="container" style="margin-top: 100px">


      <center>
         <h3>CRUD Produtos, Categorias e Marcas</h3>
      </center>

      <div class="row">

         <?php
         if ($nivel == 1) {
         ?>

         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Adicionar Produtos</h5>
                  <p class="card-text">Opção para adicionar Produtos no Estoque.</p>
                  <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
               </div>
            </div>
         </div>

         <?php
         } ?>

         <?php
         if (($nivel == 1) || ($nivel == 2)) {
         ?>

         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Lista de Produtos</h5>
                  <p class="card-text">Visualizar, Editar e Excluir Produtos no Estoque.</p>
                  <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
               </div>
            </div>
         </div>
         <?php
         } ?>


         <?php
         if ($nivel == 1) {
         ?>
         <div class="col-sm-6" style=" margin-top: 20px">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Adicionar Categoria</h5>
                  <p class="card-text">Opção para adicionar Categoria para Produtos.</p>
                  <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
                  <a href="listar_categoria.php" class="btn btn-primary">Lista de Categorias</a>
               </div>
            </div>
         </div>
         <?php
         } ?>

         <?php
         if ($nivel == 1) {
         ?>
         <div class="col-sm-6" style=" margin-top: 20px">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Adicionar Marca</h5>
                  <p class="card-text">Opção para adicionar Marcas aos Produtos.</p>
                  <a href="adicionar_marca.php" class="btn btn-primary">Cadastrar Marca</a>
                  <a href="listar_marca.php" class="btn btn-primary">Lista de Marcas</a>
               </div>
            </div>
         </div>
         <?php
         } ?>

      </div>

      <div class="container" style="width: 400px; padding-top: 10px">

         <center>
            <a href="index.php" class="btn btn-sm btn-warning">Sair do Sistema</a>
         </center>

      </div>

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