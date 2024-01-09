<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <img src="/img/Estee-Lauder-logo.png" height="100px" alt="Logo">
    <div class="container">
        <?php
        require 'vendor/autoload.php';

        use Google\Auth\ApplicationDefaultCredentials;
        use GuzzleHttp\Client;
        use GuzzleHttp\HandlerStack;

        session_start();

        // Capture UTM parameters on each page load
        if (isset($_GET['utm_source'])) {
            $_SESSION['utm_source'] = $_GET['utm_source'];
        } else {
            // Reset if no UTM parameter is present in the URL
            unset($_SESSION['utm_source']);
        }
        ?>
        <div class="form-container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-row">
                    <input type="text" id="name" name="nombre" placeholder="Nombre">
                    <input type="text" id="paterno" name="apaterno" placeholder="Apellido Paterno">
                </div>
                <div class="form-row">
                    <input type="text" id="materno" name="amaterno" placeholder="Apellido Materno">
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-row">
                    <input type="tel" id="tel" name="tel" placeholder="Teléfono">
                    <input type="date" id="nacimiento" name="nacimiento" placeholder="Fecha de nacimiento">
                </div>
                <div class="form-row">
                    <input type="submit" value="Enviar">
                </div>
                <!-- Hidden field for UTM parameters -->
                <input type="hidden" name="utm_source" value="<?php echo $_SESSION['utm_source'] ?? ''; ?>">
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect value of input field
            $nombre = htmlspecialchars($_POST['nombre']);
            $apellidop = htmlspecialchars($_POST['apaterno']);
            $apellidom = htmlspecialchars($_POST['amaterno']);
            $nacimiento = htmlspecialchars($_POST['nacimiento']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $tel = htmlspecialchars($_POST['tel']);
            $utm_source = $_POST['utm_source'] ?? ''; // Get UTM source from the form input

            $response = [
                "Nombre" => $nombre,
                "ApellidoPaterno" => $apellidop,
                "ApellidoMaterno" => $apellidom,
                "FechaNacimiento" => $nacimiento,
                "Email" => $email,
                "Tel" => $tel,
                "IdTienda" => $utm_source
            ];
            echo json_encode($response);
            /// Set up Google Cloud authentication
            putenv('GOOGLE_APPLICATION_CREDENTIALS=C:\\Users\\cmari\\OneDrive\\Desktop\\master-seo\\github\\estee-lauder\\estee-lauder-408919-4002f6a8bb0c.json'); // Adjust the path

            $middleware = ApplicationDefaultCredentials::getMiddleware(
                'https://www.googleapis.com/auth/cloud-platform'
            );
            $stack = HandlerStack::create();
            $stack->push($middleware);

            $client = new Client([
                'handler' => $stack,
                'auth' => 'google_auth',
                'base_uri' => 'https://us-west2-estee-lauder-408919.cloudfunctions.net/clienteling-registration',
            ]);

            try {
                $gcpResponse = $client->request('POST', '', [
                    'json' => $response,
                    'headers' => ['Content-Type' => 'application/json']
                ]);

                echo $gcpResponse->getBody()->getContents();
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
        ?>
    </div>
</body>

</html>