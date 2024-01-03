<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font.css">
</head>

<body>

    <h2>Responsive Form</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row">
                <div class="col-25">
                    <label for="name">Nombre</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="nombre" placeholder="Tu nombre..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="paterno">Apellido Paterno</label>
                </div>
                <div class="col-75">
                    <input type="text" id="paterno" name="apaterno" placeholder="Tu apellido paterno..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="materno">Apellido Materno</label>
                </div>
                <div class="col-75">
                    <input type="text" id="materno" name="amaterno" placeholder="Tu apellido materno..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Tu email..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="tel">Teléfono</label>
                </div>
                <div class="col-75">
                    <input type="tel" id="tel" name="tel" placeholder="Tu teléfono..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="nacimiento">Fecha de nacimiento</label>
                </div>
                <div class="col-75">
                    <input type="date" id="nacimiento" name="nacimiento" placeholder="Tu fecha de nacimiento..">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Enviar">
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $nombre = $_POST['nombre'];
            $apellidop = $_POST['apaterno'];
            $apellidom = $_POST['amaterno'];
            $nacimiento = $_POST['nacimiento'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            echo '{"Nombre":' . '"' . $nombre . '"' . "," . '"ApellidoPaterno":' . '"' . $apellidop . '"' . "," . '"ApellidoMaterno":' . '"' . $apellidom . '"' . "," . '"FechaNacimiento":' . '"' . $nacimiento . '"' . "," . '"Email":' . '"' . $email . '"' . "," . '"Tel":' . '"' . $tel . '"}';
        }
        ?>
    </div>

</body>

</html>