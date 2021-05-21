<?php
    include("../src/userFunctions.php");
    include('header.php');
    if(isset($_POST['inloggen'])) {
        $_SESSION['user'] = getUser($_POST['email'], $_POST['wachtwoord']);
    }
?>
<div class="container py-32">
    <div class="w-full">
        <div class="w-full">
            <h1>
                Inloggen
            </h1>
            <p class="mt-4">
                Log op deze pagina in.
            </p>
        </div>
        <div class="w-full mt-4">
            <form method="post">
                <div>
                    <p>
                        Email:
                    </p>
                    <input type="email" name="email" />
                </div>
                <div class="mt-4">
                    <p>
                        Wachtwoord:
                    </p>
                    <input type="wachtwoord" name="wachtwoord" />
                </div>
                <div class="mt-4">
                    <button type="submit" class="knop" name="inloggen">
                        Inloggen    
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>