<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Iniciar sesion</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
            display: flex;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .imagen {
            background-color: #DBCC33;
            width: 40%;
            background-image: linear-gradient(0deg,
                    rgba(0, 0, 0, 0.3),
                    rgba(0, 0, 0, 0.3)), url(https://i.pinimg.com/originals/61/b0/9f/61b09f83f88776a7bb3149fbc0e0de00.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .contenedor2 {
            background-color: #f5f5f5;
            width: 60%;
        }

        .formulario {
            margin: 0px auto;
            margin-top: 80px;
            width: 70%;
        }

        #btn {
            background-color: #DBCC33;
            border: 1px solid #DBCC33;
            width: 100%;
            color: #fff;
        }

        #btn:hover {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.50);
        }

        #link {
            color: #DBCC33;
        }
    </style>

</head>

<body>

    <div class="imagen">

    </div>

    <div class="contenedor2">

        <form action="login.php" method="POST">

            <div class="formulario row g-2">

                <div class="row g-3">
                    <label class="form-label m-2">
                        <?php
                        if (isset($_GET['msn'])) {
                            echo $_GET['msn'];
                        }
                        ?>
                    </label>
                </div>

                <h2 class="m-2">Inicio de sesion</h2>

                <div class="row g-3">
                    <div>
                        <label class="form-label m-2" for="usuario">Ingresa el correo</label>
                        <input class="form-control m-2" type="email" name="usuario" placeholder="Correo electronico">
                    </div>
                </div>

                <div class="row g-3">
                    <div>
                        <label class="form-label m-2" for="clave">Ingrese contraseña</label>
                        <input class="form-control m-2" type="password" name="clave" placeholder="Contraseña">
                    </div>
                </div>

                <div class="row g-3">
                    <label class="form-label m-2">
                        <?php
                        if (isset($_GET['validacion'])) {
                            echo $_GET['validacion'];
                        }
                        ?>
                    </label>
                </div>

                <div class="row g-3">
                    <div>
                        <input id="btn" class="form-control btn btn-outline-success m-2" type="submit" value="Iniciar sesion">
                    </div>
                </div>

                <div class="row g-3">
                    <div style="text-align: center;">
                        <a id="link" class="btn btn-link" href="crearCuenta.php">Crear cuenta</a>
                    </div>
                </div>

            </div>
        </form>

    </div>

</body>

</html>