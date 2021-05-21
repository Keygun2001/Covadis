

<style>
    .MKContainer {
        background-image: url('Images/MarioKartBG.jpg');
        background-repeat: no-repeat;
        height:1000px;
    }

.vertical-menu {
  width: 200px;

}

.vertical-menu img {
  width: 25px;
  height: 25px;
  /* float: right; */
}

.vertical-menu a {
  background-color: white;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}



p {
  opacity: 0%;
}
</style>
<?php 
    include('../src/databaseFunctions.php');
    include('header.php');
?>
 



 <?php 

$results = db_getData("SELECT * FROM Players ORDER BY Score3 DESC"); 
$tel=0;
?>
     <div class="MKContainer">
<div class="container">

<p class="Tabellen">Leaderboard</p>
<table>



<?php  foreach($results as $row){
        $tel++;
?>
        
       <tr><div class="vertical-menu">
<a href="#"><img src="Images/user.svg" alt=""> <?php echo $tel;echo" "; echo $row['GameName'];  echo ": score ";echo $row['Score3']; ?> </a>

</div></tr>
        
        
</table>      
                    <?php } ?>
</div>
</div>


          
    
                    



