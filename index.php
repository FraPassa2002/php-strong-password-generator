
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // var_dump($_GET);

    if (isset($_GET['length'])) {
        $passLength = intval($_GET['length']);
        // var_dump($passLength);

        if ($passLength >= 3 && $passLength <= 20) {

            $validCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!?~@#-_+<>[]{}';
            $min = 0;
            $max = strlen($validCharacters) - 1;

            $password = '';
            for ($i = 0; $i < $passLength; $i++) { 

                $randomCharacter = $validCharacters[mt_rand($min, $max)];
                // var_dump($randomCharacter);

                $password .= $randomCharacter;
            }

            // var_dump($password);

        }

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mb-3">
                        PHP Strong Password Generator
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <form action="" method="GET">
                        <div class="mb-3">
                            <label for="length" class="form-label">
                                <h5>
                                    Lunghezza della password
                                </h5>
                            </label>
                            <input type="number" class="form-control" id="length" name="length" placeholder="Inserisci la lungheza della password" required min="3" max="20">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">INVIA</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </header>

    <main>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3>
                    La password è:
                </h3>

                <h2 class=" fw-bold ">
                    <?php
                        echo $password;
                    ?>
                </h2>
            </div>
        </div>
    </div>

    </main>

</body>

</html>