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
    <div class="headercontainer">
        <div class="flex w-full items-end">
            <div class="w-3/12">
                <img src="<?php echo IMG_FOLDER; ?>/logo.png" />
            </div>
            <div class="w-9/12">
                <ul class="w-full flex nav">
                    <li class="w-3/12">
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li class="w-3/12">
                        <a href="#">
                            Leaderboards
                        </a>
                    </li>
                    <li class="w-3/12">
                        <a href="#">
                            Spelers
                        </a>
                    </li>
                    <li class="w-3/12">
                        <a href="#">
                            Inloggen
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>