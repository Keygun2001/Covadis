<?php
    include("../src/userFunctions.php");
    include('header.php');
    if(isset($_POST['inloggen'])) {
        $_SESSION['user'] = getUser($_POST['email'], $_POST['wachtwoord']);
    }
?>
<div class="bg-gradient-black py-64">
    <div class="container py-12">
        <div class="w-full">
            <div class="w-full">
                <h1 class="text-white">
                    Inloggen
                </h1>
                <p class="mt-4 text-white">
                    Log op deze pagina in.
                </p>
            </div>
            <div class="w-full mt-4">
                <form method="post">
                    <div>
                        <p class='text-white'>
                            Email:
                        </p>
                        <input type="email" name="email" />
                    </div>
                    <div class="mt-4">
                        <p class="text-white">
                            Wachtwoord:
                        </p>
                        <input type="wachtwoord" name="wachtwoord" />
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="knop knop-gradient" name="inloggen">
                            Inloggen    
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>