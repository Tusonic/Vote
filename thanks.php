<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziękuję</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
         .text_kart {
            font-size: 36px;
        }

        .btn {
            margin: 20px;
            font-size: 22px;
            width: 30%;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>

</head>
<body>
    <div class="text-center mt-5">
            <img src="logo.png" alt="logo" width="400px">
            
            <br><br>

            <p class="text_kart"> <b> Dziękujemy za oddanie głosu </b> </p>

            <a href="index.php"> <button type="button" class="btn btn-primary"> Wróć do strony głównej </button> </a>

        </div>
</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>