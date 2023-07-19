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
        session_start();
        include_once __DIR__ .  '/RandomPass.php';

        if (isset($_GET['lunghezza'])) {
            $lunghezza_password = $_GET['lunghezza'];

        if ($lunghezza_password > 0) {
            $password_generata = generaPasswordCasuale($lunghezza_password);
            
            $_SESSION['generated_password'] = $password_generata;
            header('Location: mostraPassword.php');
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