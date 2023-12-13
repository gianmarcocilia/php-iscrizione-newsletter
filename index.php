<?php 
include_once __DIR__ . '/functions.php';
session_start();
if (isset($_SESSION['verified']) && $_SESSION['verified'] === true) {
    header('Location: ./thankyou.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <form action="index.php" method="POST" class="text-center mt-5">
        <label for="email">Inserisci una e-mail</label>
        <input type="text" name="email" id="email" value="<?php if(isset($_POST['email']) && $_SESSION['verified'] === false) {echo $_POST['email'];}?>">
        <button type="submit">Invia</button>
    </form>
    <?php check_email(); ?>
    </div>
</body>

</html>