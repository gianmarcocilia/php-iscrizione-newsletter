<?php 
include __DIR__ . '/functions.php';
check_email();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="email">Inserisci una e-mail</label>
        <input type="text" name="email" id="email">
        <button type="submit">Invia</button>
    </form>
</body>

</html>