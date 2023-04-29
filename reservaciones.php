<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/proto_form.css" />
    <title>Ricón Ganadero</title>
  </head>
  <body>
    <!-- Botón volver -->
    <div class="wrap">
    <a class="button" href='index.php' style="padding: 15px; text-decoration: none;">Volver</a>
    </div>
        <!--  -->
    <div class="login-page">
      <div class="form">
        <form action="PHPmailer/enviar.php" method="post" class="login-form">
        <h4>Propetario de reservacion</h4>
        <input type="text" class="form-control mb-3" name="n" required >
        <h4>Correo electronico</h4>
        <input type="email" class="form-control mb-3" name="e" required >
        <h4>Descripción</h4>
        <input type="text" class="form-control mb-3" name="d" required>
        <h4>Fecha</h4>
        <input type="date" class="form-control mb-3" name="f" required>
        <h4>Hora</h4>
        <input type="time" class="form-control mb-3" name="t" required>
          <button type="submit" name="register" id="enviar">Enviar</button>
        </form>
      </div>
    </div>
  </body>
</html>
