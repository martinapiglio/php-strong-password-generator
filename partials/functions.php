<?php 

    $specialChars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz0123456789!?#$%&-_@';

    function generateRandomPassword($lenght, $characters) {

        $password = '';

        for ($i = 0; $i <= $lenght - 1; $i++) {

            $randomPassword= $characters[random_int(0, strlen($characters) - 1)];
            $password .= $randomPassword;

           };

        return $password;

    };

?>