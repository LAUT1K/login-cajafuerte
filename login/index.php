<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="estilos/index.css">
  
  <title>INICIO</title>
</head>
<body>

    <section>
        <form action="validar.php" method="post">
        <div class="form-box">
            <div class="form-value">
                
                <form action="">
                    
                    <h2>Inciar sesion</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" id="usuario" name="usuario" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="contraseña" name="contraseña" required>
                        <label for="">Contraseña</label>
                        
                    </div>
                    

                    
                    <button type="submit" >Iniciar sesion</button>
                    <br><br>
                    <a href="cuenta.php" >Crear Cuenta</a>
                    
                </form>
                
            </div>
        </div>  
    </form>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>