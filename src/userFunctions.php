<?php
require_once('databaseFunctions.php');

function registerUser($firstName,$lastName,$phonenumber,$email,$password, $bootID, $dagdeelID, $date, $luxeID){
    $result = db_insertData("INSERT INTO verhuur(FirstName, LastName, PhoneNumber, Email, Password, BootID, dagID, DateVerhuur ,LuxeID) VALUES ('$firstName','$lastName','$phonenumber','$email','$password', '$bootID', '$dagdeelID' ,'$date', '$luxeID')");
    return $result;
}

function getUser($email,$password){
    $user = db_getData("SELECT * FROM login WHERE email = '$email' AND PASSWORD ='$password'");
    if ( $user->num_rows > 0){
        return $user;
        header('location: index.php');
    }else{
        return "No user found";
    }
}
<<<<<<< HEAD
=======
function checkUser($email,$password){
    $conn=db_connect();
    $sql = "SELECT * from Players WHERE email='$email' AND password='$password' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION['user'] = $row; 
    }
} else{
return "0 results";
}
}
>>>>>>> 721b670b74af551c2b123b99e215099366f692e8
?>
