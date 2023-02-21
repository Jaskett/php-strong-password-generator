<?php
    $length = $_GET['pass-length'] ?? 0;

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