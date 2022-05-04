<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crear cuenta</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
            display: flex;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .imagen {
            background-color: #FA754F;
            width: 40%;
            background-image: linear-gradient(0deg,
                    rgba(0, 0, 0, 0.3),
                    rgba(0, 0, 0, 0.3)), url(https://www.proandroid.com/wp-content/uploads/2016/07/Fondo-de-pantalla-pokemon-charmander.jpg);
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
            background-color: #FA754F;
            border: 1px solid #FA754F;
            width: 100%;
            color: #fff;
        }

        #btn:hover {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.50);
        }

        #link {
            color: #FA754F;
        }
    </style>

</head>

<body>

    <div class="contenedor2">

        <form action="newCuenta.php" method="GET">

            <div class="formulario row g-2">

                <h2 class="m-2">Crear cuenta</h2>

                <div class="row g-2">
                    <div>
                        <label class="form-label m-2" for="nombre">Nombre</label>
                        <input class="form-control m-2" type="text" name="nombre">
                    </div>
                </div>

                <div class="row g-2">
                    <div>
                        <label class="form-label m-2" for="correo">Correo</label>
                        <input class="form-control m-2" type="email" name="correo">
                    </div>
                </div>

                <div class="row g-2">
                    <div>
                        <label class="form-label m-2" for="clave">Contraseña</label>
                        <input class="form-control m-2" type="password" name="clave">
                    </div>
                </div>

                <div class="row g-2">
                    <div>
                        <input id="btn" class="form-control btn btn-outline-success m-2" type="submit" value="Crear">
                    </div>
                </div>

                <div class="row g-2">
                    <div style="text-align: center;">
                        <a id="link" class="btn btn-link" href="index.php">Ya tienes una cuenta?</a>
                    </div>
                </div>

            </div>
        </form>

    </div>

    <div class="imagen">

    </div>

</body>

</html>