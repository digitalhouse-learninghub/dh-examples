<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>resultado de formulario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">

      <ul class="list-group">
        <li class="list-group-item"><strong>Nombre:</strong> <?=$_POST['nombre']?></li>
        <li class="list-group-item"><strong>Apellido:</strong> <?=$_POST['apellido']?></li>
        <li class="list-group-item"><strong>Pais:</strong> <?=$_POST['pais']?></li>
        <li class="list-group-item"><strong>E-mail:</strong> <?=$_POST['email']?></li>
        <li class="list-group-item"><strong>Edad:</strong> <?=$_POST['edad']?> años</li>
      </ul>

<?
      $edad = (int) $_POST['edad'];
      if($edad < 18):
?>
      <div class="alert alert-danger" role="alert">La edad debe ser mayor a 18 años</div>
      <? endif; ?>

    </div>
  </body>
</html>
