<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generatore di password casuale</h1>
      <?php
        function generaPasswordCasuale($lunghezza) {
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[{]};:,.<>?';
        $lunghezza_caratteri = strlen($caratteri);
        $password = '';

        for ($i = 0; $i < $lunghezza; $i++) {
            $index = rand(0, $lunghezza_caratteri - 1);
            $password .= $caratteri[$index];
        }

        return $password;
    }

    if (isset($_GET['lunghezza'])) {
        $lunghezza_password = $_GET['lunghezza'];

        if ($lunghezza_password > 0) {
            $password_generata = generaPasswordCasuale($lunghezza_password);
            echo "<div>La tua password casuale di lunghezza $lunghezza_password è:</div>";
            echo "<div>$password_generata</div>";
        } else {
            echo "<div>Nessun parametro valido inserito</div>";
        }
    }
    ?>

    <form action="" method="get">
        <label for="lunghezza">Lunghezza della password:</label>
        <input type="number" name="lunghezza" id="lunghezza">
        <button type="submit">Genera password</button>
    </form>
</body>
</html>