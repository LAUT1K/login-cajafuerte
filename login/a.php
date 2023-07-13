<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
      *{
       
      }

      body{
        background-color: #2e2e2e;
        background-image: url('fondo-index.jpg');
      }
      h1{

        
        text-align: center;
        color: #fff;
        background-color: #5a6cd4;

      }
    </style>

<body>

      <h1>INICIO DE SESION CAJA FUERTE</h1>

        <form action="validar.php" method="post">
     

        <div class="login-form">
      <h2>Iniciar sesión</h2>
     
        <div class="form-group">
          <label for="usuario">Usuario:</label>
          <input type="text" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
          <label for="contraseña">Contraseña:</label>
          <input type="password" id="contraseña" name="contraseña" required>
        </div>
        <button type="submit">Iniciar sesión</button>
        
      </form>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>