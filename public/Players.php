<?php 
    include('../src/databaseFunctions.php');
    include('header.php');
?>
 


    <h1>Players</h1>

    <?php 
    
        $results = db_getData("SELECT * FROM Players"); 
       
    ?>
               
       <div class="flex mt-4">
       <table class="mt-4">
        <?php  foreach($results as $row){
            
        ?>
                
                 <div class="Player flex">
                 <tr>
                        <th>GameNaam</th>
                        <th>Score</th>
                        <th>Jaren</th>
                        
                    </tr>
                    <tr>
                        <td>
                            <?php echo $row['GameName']; ?>
                        </td>
                        <td>
                            <?php echo $row['Score']; ?>
                        </td>
                        <td>
                            <?php echo $row['Years']; ?>
                        </td>
                        
                    </tr>
                 </div>
                <!-- <div class="Player"> -->
                  
                
                
                            <?php } ?>
                        
        </table>
       </div>
         
      
     
 