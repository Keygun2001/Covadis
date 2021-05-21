<?php 
    include('../src/databaseFunctions.php');
    include('header.php');
?>
 

<div class="container py-32">
<h1>Players</h1>

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
                    <h2>Score</h2>
                    <p>
                        <?php echo $row['Score']; ?>
                    </p>
                    <h2>Jaren</h2>
                    <p>
                        <?php echo $row['Years']; ?>
                    </p>
                    
             
             </div>
            <!-- <div class="Player"> -->
              
            
            
                        <?php } ?>
                    

   </div>
</div>
   
         
      
     
 