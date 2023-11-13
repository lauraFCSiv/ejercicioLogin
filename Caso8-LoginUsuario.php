<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo Login Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
        <div class="container">
            <div class="row mt-4">
            <div class="col-4"></div>
                <div class="col-4">
                    <form method="post" >
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Introduce el email">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                        </div> 
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>

        <div>
        <p>
             <?php 
             function comprobarUsuario(){
                 //TODO implementar este método
                 session_start();
                 $usuario = "Laura";
                 $_SESSION['usuario'] = $usuario;
             }
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 comprobarUsuario();
                 if (isset($_SESSION['usuario'])){
                     echo "<p>Login correcto</p>";
                     header("Location:Caso8-loginSuccesful.php");
                 }else{
                    echo "<p>Error al introducir el usuario o contraseña";
                 }
                
            }

            ?>
        </p>
    </div>
</body>
</html>
