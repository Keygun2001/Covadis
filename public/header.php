<?php
    session_start();
    include('../config/config.php');
    include_once('../src/userFunctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covadis High-Scores op maat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_FOLDER; ?>" />
</head>
<body>
    <div class="btm-shadow bg-gradient-grey">
        <div class="headercontainer">
            <div class="flex w-full items-end">
                <div class="w-2/12 p-2">
                    <a href="index.php"> 
                        <img src="<?php echo IMG_FOLDER; ?>/logo.png" />
                    </a>
                </div>
                <div class="w-9/12 flex">
                    <ul class="w-full flex justify-end nav">
                        <li class="flex justify-center">
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="flex justify-center">
                            <a href="highscores.php">
                                Leaderboards
                            </a>
                        </li>
                        <li class="flex justify-center">
                            <a href="players.php">
                                Spelers
                            </a>
                        </li>
                        <?php if(!isset($_SESSION['user'])){  ?>
                        <li class="flex justify-center">
                            <a href="inloggen.php">
                                Inloggen
                            </a>
                        </li>
                        <?php } else { ?>
                            <li class="flex justify-center">
                            <a href="uitloggen.php">
                                Uitloggen
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>