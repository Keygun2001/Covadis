<?php
    include('../config/config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covadis High-Scores op maat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_FOLDER; ?>" />
</head>
<body>
    <div class="btm-shadow">
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
                        <li class="flex justify-center">
                            <a href="inloggen.php">
                                Inloggen
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>