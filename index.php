<?php
    session_start();

    require_once __DIR__ . "/partials/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <form>
        <label for="pass-length">Scegli la lunghezza della password (minimo 7 caratteri, massimo 15 caratteri)</label>
        <input type="number" name="pass-length" min="7" max="15" placeholder="Inserisci">
        <input type="submit" value="Genera">
    </form>

    <?php
        if($length) {
            $_SESSION['pass'] = generateRanPass($length);
            header('Location: passGenerated.php');
        }
    ?>
</body>
</html>