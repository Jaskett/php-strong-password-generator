<?php
    session_start();

    $password = $_SESSION['pass'];

    require_once __DIR__ . "/partials/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <span class="pass-generator">
            La password generata è: <?php echo $password ?>;
        </span>

        <a href="index.php">Genera una nuova password</a>
    </div>
</body>
</html>