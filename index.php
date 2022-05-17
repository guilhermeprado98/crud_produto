<!DOCTYPE html>
<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1.0, user-scalabe=no" />
   <title>Tela de Login</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


   <style type="text/css">
   #tamanho {
      width: 350px;
      margin-top: 100px;
      border-radius: 20px;
      border: 2px solid #f3f3f3;
      padding: 2px;

   }

   #button-entrar {
      background-color: green;
      color: white;
      margin-top: 10px;
   }
   </style>


</head>

<body>

   <div class="container" id="tamanho">
      <center>
         <img src="imagem/cadeado.png">
      </center>

      <form action="view/validar_login.php" method="POST">
         <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
         </div>
         <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
         </div>



         <div style="text-align: center">

            <button type="submit" id="button-entrar" class="btn btn-sucess">Entrar</button>

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