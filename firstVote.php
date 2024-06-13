<?php
    session_start();

    if(isset($_SESSION['firstVotePressed']) && $_SESSION['firstVotePressed'] == 1)
    {
        header('Location: index.php');
    }
    $myfile = fopen('savefile.php', 'a') or die("Unable to open file");

    if(isset($_POST['firstZa'])) {
        $text = "Głosowanie pierwsze - Głos oddany: Za\n";
        fwrite($myfile, $text);
        fclose($myfile);
        $_SESSION['firstVotePressed'] = 1;
        header('Location: thanks.php');
    }
    else if(isset($_POST['firstWs'])) {
        $text = "Głosowanie pierwsze - Głos oddany: Wstrzymuje sie\n";
        fwrite($myfile, $text);
        fclose($myfile);
        $_SESSION['firstVotePressed'] = 1;
        header('Location: thanks.php');
    }
    else if(isset($_POST['firstPr'])) {

        $text = "Głosowanie pierwsze - Głos oddany: Przeciw\n";
        fwrite($myfile, $text);
        fclose($myfile);
        $_SESSION['firstVotePressed'] = 1;
        header('Location: thanks.php');
    }

    // ****************
   // TREŚĆ GŁOSOWANIA 
  // ****************
  
    $glosowanie_pierwsze = ' TEXT ';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

     <!-- CSS only -->
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

        .buttons_text p {
            font-size: 26px;
        }

        .btn {
            font-size: 22px;
            margin: 15px;
            width:100%;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>

</head>
<body>
    
<div class="container">
        <div class="text-center mt-5">
            <img src="logo.png" alt="logo" style="max-width: 20%;">
            
            <br><br>
            <p class="text_kart" font-size="36px"> <b> KARTA DO GŁOSOWANIA </b> </p>

            <div class="main_text">
                Głosowanie <!-- pierwsze --> w sprawie: <b> <?php echo $glosowanie_pierwsze; ?> </b>
            </div>

            <br><br>
        </div>

        <div class="text-center buttons_text">
            <p> <b> Proszę o oddanie głosu: </b> </p>
            <br>
            <form method="post">
                <div class="row" style="width: 100%;">
                    <div class="col-md-4">
                        <button type="submit" name="firstZa" id="firstZa" class="btn btn-success">Za</button>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" name="firstWs" id="firstWs" class="btn btn-warning">Wstrzymuję się</button>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" name="firstPr" id="firstPr" class="btn btn-danger">Przeciw</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>