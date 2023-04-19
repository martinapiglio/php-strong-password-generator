<?php  
    include_once './partials/functions.php';
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

    <form action="index.php" method="GET">

        <label for="psw-lenght">Please insert the password lenght:</label><br>
        <input name="password-length" type="number" min="4" max="15" id="psw-lenght" placeholder="min 4, max 15">
        <button type="submit">Generate Password</button>

    </form>

    <div>
       <?php 
            if ($passwordLength) {
                echo '<strong>Your password is:</strong>' . generateRandomPassword($passwordLength, $specialChars); 
            }
        ?>
    </div>
    
</body>
</html>