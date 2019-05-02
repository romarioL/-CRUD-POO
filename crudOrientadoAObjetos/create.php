<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="black">

    <nav>
    <div class="nav-wrapper black">
      <ul id="nav-mobile" class=" hide-on-med-and-down">
        <li><a href="edit.php">Editar</a></li>
        <li><a href="create.php">Cadastrar</a></li>
      </ul>
    </div>
  </nav>


  <form action="formcreate.php" method="post">
    <div class="row">
        <div class="input-field col s12">
          <input placeholder="Nome" name="nome"id="first_name" type="text" class="validate white">
        </div>

        <div class="input-field col s12">
          <input placeholder="Email" name="email"id="email" type="text" class="validate white">
        </div>

        <input type="submit" value="Enviar" class="btn white waves-effect waves-light">
        <input type="reset" value="Apagar" class="btn white waves-effect waves-light">
    </div>
  </form>








      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>