<?php 
    include('../src/databaseFunctions.php');
    include('header.php');
?>
<div class="bg-gradient-black"> 
    <div class="container py-12">
    <h1>Room</h1>

    <?php 

        $results = db_getData("SELECT * FROM Players"); 
    
    ?>
            
    <div class="flex mt-4 flex-wrap">
    
        <?php  foreach($results as $row){
            
        ?>
                
                <div class="Player flex mr-8 flex-col mb-4">
                
            
                    <h2>GameNaam</h2>
                        <p>
                            <?php echo $row['GameName']; ?>
                        </p>
                    
                        
                
                </div>
                <!-- <div class="Player"> -->
                
                
                
                            <?php } ?>
                        

    </div>
    </div>
</div>