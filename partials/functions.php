<?php 

    function generateRandomPassword($lenght) {

        $lowercaseAlphabet = 'abcdefghijklmnopqrstuvwxyz';
        $uppercaseAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $specialChar = '!@#$%^&*()_-+=;:<>/?';

        $characters = $lowercaseAlphabet . $uppercaseAlphabet . $numbers . $specialChar;

        $password = '';

        $password .=  $lowercaseAlphabet[rand(0,strlen($lowercaseAlphabet)-1)];
        $password .=  $uppercaseAlphabet[rand(0,strlen($uppercaseAlphabet)-1)];
        $password .=  $numbers[rand(0,strlen($numbers)-1)];
        $password .=  $specialChar[rand(0,strlen($specialChar)-1)];        

        for ($i = 4; $i <= $lenght - 1; $i++) {

            $randomPassword= $characters[rand(0, strlen($characters) - 1)];
            $password .= $randomPassword;

           };

        $password = str_shuffle($password);

        return $password;

    };

?>