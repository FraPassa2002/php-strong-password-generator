<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $lengthPassword = $_GET['length'];
    var_dump($lengthPassword);


    $characters = [
        'minuscole' => 'a b c d e f g h i j k l m n o p q r s t u v w x y z',
        'maiuscole' => 'A B C D E F G H I J K L M N O P Q R S T U V W X Y Z',
        'numeri' => '1 2 3 4 5 6 7 8 9 0',
        'caratteri_speciali' => '! ? ~  @ # - _ + < > [ ] { }'
    ];
    var_dump($characters);  

    foreach ($characters as $i => $val) {
        $explodedCharacters = [];
        $explodedCharacters = explode(' ', $characters[$i]);
        var_dump($explodedCharacters);

        
    }

?>


<!-- 1- creare form che invia a GET la lunghezza della password
2- creare una funzione che utilizza il dato del form per creare la password
3- la password casuale conterrà lettere, lettere maiuscole, numeri e simboli -->
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
        <h1>
            PHP Strong Password Generator
        </h1>

        <form action="" method="GET">
            <div class="mb-3">
                <label for="example" class="form-label">
                    <h5>
                        Lunghezza della password
                    </h5>
                </label>
                <input type="number" class="form-control" name="length">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">INVIA</button>
            </div>
        </form>
        
        <div class="mt-5">
            <?php
                if ($lengthPassword == '') {
                    echo '<h2>Inserisci un numero</h2>';
                }
            ?>
        </div>
    </header>

    <main>
    </main>

</body>

</html>