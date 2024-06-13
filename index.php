<?php

session_start();

if (isset($_POST['firstVote'])) {
    if ((isset($_SESSION['firstVotePressed']))) {
        $_SESSION['e_firstVotePressed'] = 'Już zagłosowano';
    } else {
        header("Location: firstVote.php");
    }
}

$data = 'RRRR-MM-DD';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Głosowanie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .text_kart {

            font-size: 36px;

        }

        .main_text {

            font-size: 24px;

        }

        .buttons_text {

            font-size: 22px;
        }

        .btn {

            font-size: 22px;

        }

        a {

            text-decoration: none;

            color: white;

        }

        .error {

            color: red;

            margin-top: 15px;

        }
    </style>

</head>

<body>
    <div class="container">
        <div class="text-center mt-5">
            <img src="logo.png" alt="logo" style="max-width: 30%;">
            <br><br>
            <p class="text_kart"> <b> KARTA DO GŁOSOWANIA </b> </p>
            <div class="main_text">
                <b> Na posiedzeniu ... ... ... ... ... z siedzibą w ... <br>
                    z wykorzystaniem środków bezpośredniego porozumiewania się na odległość. </b>
            </div>
            <br><br>
        </div>

        <form method="post">
            <div class="text-center buttons_text">
               <p> <b><!-- Pierwsze --></b> <!-- Głosowanie --></p>
                 <button type="submit" name="firstVote" id="firstVote" class="btn btn-primary">Proszę przejdź do <b><!-- pierwszego --></b> głosowania </button>
                <?php
                if (isset($_SESSION['e_firstVotePressed'])) {
                    echo '<div class="error">' . $_SESSION['e_firstVotePressed'] . '</div>';
                    unset($_SESSION['e_firstVotePressed']);
                }

                ?>
                <?php
                if (isset($_SESSION['e_secondVotePressed'])) {
                    echo '<div class="error">' . $_SESSION['e_secondVotePressed'] . '</div>';
                    unset($_SESSION['e_secondVotePressed']);
                }

                ?>
                <?php

                if (isset($_SESSION['e_thirdVotePressed'])) {
                    echo '<div class="error">' . $_SESSION['e_thirdVotePressed'] . '</div>';
                    unset($_SESSION['e_thirdVotePressed']);
                }

                ?>  

            </div>
        </form>
    </div>

    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>