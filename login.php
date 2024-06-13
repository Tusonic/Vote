<?php

session_start();

if(isset($_POST['pin'])) {
    $pin = $_POST['pin'];

    if($pin == '0000') {
        $_SESSION['isAdmin'] = 1;
        header('Location: save.php');
    }
    else {
        $_SESSION['e_pin'] = "Niewłaściwy kod";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>

    <style>
    .container {
    height: 50%;
    display: flex;
    flex-direction: column;

    justify-content: center;
    align-items: center;
    margin: 100px auto;
    }   

    .container label {
        margin: 10px auto;
        font-size: 28px;
    }

    .container button {
        font-size: 18px;
        display: flex;
        align-items: center;
        margin: 10px auto;

        background-color: green;
        color: white;
        padding: 7px;
        border-radius: 0.2em;
        border-style: none;
    }

    .container input {
        font-size: 26px;
    }

    .error {
        color: red;
        text-align: center;
        padding: 5px;
        font-size: 20px;
    
    }
    </style>
</head>
<body>

    <div class="container">
        <label for=""><b>Logowanie:</b></label>

        <form method="post">
            <input type="number" class="" name="pin">

            <div>
                <button type="submit">Zaloguj</button>
            </div>

            <?php
                //displaying error
                if(isset($_SESSION['e_pin'])) {
                    echo '<div class="error">'.$_SESSION['e_pin'].'</div>';
                    unset($_SESSION['e_pin']);
                }
            ?>
        </form>
    </div>    



</body>
</html>