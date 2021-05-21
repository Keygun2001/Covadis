<?php
    require_once("header.php");
?>

<style>
    .MKContainer {
        background-image: url(Images/LeagueOfLegendsBG.jpg);
        background-repeat: no-repeat;
        height: 1000px;
    }

.vertical-menu {
  width: 200px;
 
}

.vertical-menu img {
  width: 25px;
  height: 25px;
  float: right;
}

.vertical-menu a {
  background-color: #eee;
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

    $results = db_getData("SELECT * FROM Players ORDER BY Score DESC"); 
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
  <a href="#"><img src="Images/user.svg" alt=""> <?php echo $tel;echo" "; echo $row['GameName'];  echo ": score ";echo $row['Score']; ?> </a>

  </div></tr>
            
            
  </table>      
                        <?php } ?>
</div>
</div>



