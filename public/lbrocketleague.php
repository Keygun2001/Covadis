

<style>
    .MKContainer {
        background-image: url('Images/RocketLeagueBG.jpg');
        background-repeat: no-repeat;
        height:1000px;
        width:100%;
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
    include('../src/databaseFunctions.php');
    include('header.php');

    $results = db_getData("SELECT * FROM Players ORDER BY Score2 DESC"); 
    $tel=0;
?>
<div class="bg-gradient-black">
  <div class="MKContainer">
    <div class="container">
      <p class="Tabellen">Leaderboard</p>
      <table>
      <?php  foreach($results as $row){
        $tel++;
      ?>
        <tr>
          <div class="vertical-menu">
            <a href="#"><img src="Images/user.svg" alt=""> 
              <?php echo $tel;echo" "; echo $row['GameName'];  echo ": score ";echo $row['Score2']; ?> 
            </a>
          </div>
        </tr>
      </table>      
      <?php } ?>
    </div>
  </div>
</div>


