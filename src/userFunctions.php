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
?>
