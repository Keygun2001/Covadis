<?php 
    include('../src/databaseFunctions.php');
    include('header.php');
    $results = db_getData("SELECT * FROM Players"); 
?>
 
<script src='JS/index.js' defer></script>
<div class="container py-12">
    <h1>
        Players
    </h1>
    <div class="w-full mt-4">
        <input type="text" id="mySearch" onkeyup="myFunction()">
        <ul id="myMenu">
            <?php foreach($results as $plr) { ?>
            <li><a href="#"><?php echo $plr['GameName'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="flex mt-4 flex-wrap">
    <?php  foreach($results as $row){ ?>
        <div class="Player flex mr-8 flex-col mb-4">
            <h2>
                SpelerNaam
            </h2>
            <p>
                <?php echo $row['GameName']; ?>
            </p>
            <h2>
                Score
            </h2>
            <p>
                <?php echo $row['Score']; ?>
            </p>
            <h2>
                Jaren
            </h2>
            <p>
                <?php echo $row['Years']; ?>
            </p>
        </div>
    <?php } ?>
    </div>
</div>