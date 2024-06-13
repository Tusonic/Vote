<?php
    session_start();

    if(!(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1)) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyniki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .main{
            display:flex;
            flex-direction: row;
            width: 100%;
            align-items: center;
            justify-content:center;
            font-size: 24px;
        }
        .main p{
            font-size: 28px;
        }
        .first_voting {
            display: flex;
            flex-direction: column;
            margin: 50px;
        }
        .second_voting {
            display: flex;
            flex-direction: column;
            margin: 50px;
        }
        .third_voting {
            display: flex;
            flex-direction: column;
            margin:50px;
        }
        @media only screen and (max-width:1000px) {
            .main {
                flex-direction: column;
                font-size: 20px;
            }

            .main p {
                font-size: 22px;
            }
        }
        @media only screen and (max-width:600px) {
            .first_voting {
                margin: 25px;
            }
            .second_voting {
                margin: 25px;
            }
            .third_voting {
                margin: 25px;
            }
        }
        main{
            display:flex;
            flex-direction: column;
            justify-content:center;
            align-items: center;
        }
        main img{
            width:30%;
            margin-bottom:70px;
        }
    </style>

</head>
<body>
    <main>
        <br>
        <img src="logo.png" class="img-fluid" alt="...">
        <div class="answers">
            <h5>
                <?php echo nl2br(file_get_contents( "savefile.php" )); ?>
            </h5>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>