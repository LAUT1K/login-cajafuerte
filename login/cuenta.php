<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="estilos/index.css">
  <title>REGISTRARSE</title>
</head>
<body>
   

    <section>
       
    <?php
             include("db.php");
             include("controlador/registrar-usuario.php");
            ?>
           
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                
                    <h2>REGISTRARSE</h2>
                    <div  class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" id="usuario" name="clave" required>
                        <label for="">Codigo Caja</label>
                    </div>
                    
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" id="usuario" name="usuarioo" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="contraseña" name="password" required>
                        <label for="">Contraseña</label>
                        
                    </div>
                   
                   
                    <input class="btn-registrar" type="submit" value="Registrar" name="register">
                    <br> <br>
                    <a href="index.php">volver</a>
                    
                </form>
            </div>
        </div>
    
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>