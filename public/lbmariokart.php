<?php
    require_once("header.php");
?>

<style>
    .MKContainer {
        background-image: url(Images/MarioKartBG.jpg);
        background-repeat: no-repeat;
    }

.vertical-menu {
  width: 200px;
  height: 150px;
  /* overflow-y: auto; */
}

.vertical-menu img {
  width: 25px;
  height: 25px;
  /* float: right; */
}

.vertical-menu a {
  background-color: grey;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: red;
  color: white;
}

p {
  opacity: 0%;
}
</style>
<?php 
    include('../src/databaseFunctions.php');
    
?>
 



<?php 

    $results = db_getData("SELECT * FROM Players ORDER BY Score DESC"); 
    $tel=0;
?>
           
<div class="container">
<div class="MKContainer"></div>
<?php  foreach($results as $row){
            $tel++;
    ?>
            
           
            <div class="vertical-menu">
  <a href="#"><img src="Images/user.svg" alt=""> <?php echo $tel;echo" "; echo $row['GameName'];  echo ": score ";echo $row['Score']; ?> </a>

  </div>
            
            
                        <?php } ?>
</div>
          
    
                    



