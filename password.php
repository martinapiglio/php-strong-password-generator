<?php

    include_once './partials/functions.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>

    <div>

        <h3>Password</h3>

        Your password consts of <?php echo $_SESSION['passwordLength']?> characters.
        <div>
            <?php
                echo '<strong>Password: </strong>' .  generateRandomPassword($_SESSION['passwordLength']); 
            ?>
        </div>

    </div>

    <div>
        <a href="index.php">Back</a>
    </div>

</body>
</html>