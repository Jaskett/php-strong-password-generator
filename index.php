<?php
    $length = $_GET['pass-length'] ?? 0;

    //var_dump($length);

    function generateRanPass($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$?%^&*()_-+={[}]:;@#|\<,>.?/';

        $lengthChars = strlen($characters);

        $randomPass = '';

        for($i = 0; $i < $length; $i++) {
            $randomPass .= $characters[rand(0, $lengthChars - 1)];
        }

        return $randomPass;
    }
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
        <label for="pass-length">Scegli la lunghezza della password</label>
        <input type="number" name="pass-length" min="7" max="15" placeholder="Minino 7 caratteri, massimo 15 caratteri">
        <input type="submit" value="Genera">
    </form>

    <span>
        La password generata è: <?php echo generateRanPass($length) ?>
    </span>
</body>
</html>