<?php
session_start();
if (isset($_SESSION['generated_password'])) {
    $password_generata = $_SESSION['generated_password'];
} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Generatore di password casuale</h1>
    <div>La tua password casuale è:</div>
    <div><?= $password_generata ?></div>
</body>
</html>