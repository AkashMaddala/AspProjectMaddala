<?php
//created by Akash Maddala

include("inc_dbConfig.php");

define("INTRO", 10);
define("VEDIC", 15);
define("MOVEMENT", 12);
define("ESSENCE", 11);
define("ASTROLOGER", 13);
define("ASTROLOGY", 20);

$result;

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$seminars = $_POST["seminars"];


$sql = "INSERT INTO bookings (firstname, lastname, emailaddress, contactnumber, seminar) VALUES ('$firstName' , '$lastName','$email', '$phonenumber', '$seminars' );";

$connection = new mysqli($host, $username, $password, $dbname);
if($connection->errno){
    ("connection failed: ". $connection->connect_error);
    echo("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
    die("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
    
}
try{
    if($connection->query($sql)){
        echo("<h4 class='py-5 purple text-center'>Hello ".ucfirst($firstName)." Your booking for <b>'$seminars'</b> is successful, Will email you the details of seminar.</h4>");
        getFare($seminars);
        $_POST[] = array();
    }
    else{
        throw new Exception("Select Query failed" . $connection->error);
        
    }
}catch (Exception $e){
    die("Error:  ".$e->getMessage());
}

$connection->close();
//unset($_POST('insert'));

function getFare($seminars){
    
    switch($seminars){
        
        case "Introduction to Astrology and Astronomy":
            
            echo("<h4 class='py-5 purple text-center'>You have to pay $". INTRO. " for this seminar.</h4>");
            break;
        case "Vedic Astrology":
            
            echo("<h4 class='py-5 purple text-center'>You have to pay $". VEDIC. " for this seminar.</h4>");
            break;
        case "Movement of the Celestial Sphere":
            echo("<h4 class='py-5 purple text-center'>You have to pay $". MOVEMENT. " for this seminar.</h4>");
            break;
        case "Essence and Nature of the Zodiac":
            
            echo("<h4 class='py-5 purple text-center'>You have to pay $". ESSENCE. " for this seminar.</h4>");
            break;
        case "Astrologer and Structure of the Solar System ":
            
            echo("<h4 class='py-5 purple text-center'>You have to pay $". ASTROLOGER. " for this seminar.</h4>");
            break;
        case "Astrology and its Connection to Science":
            
            echo("<h4 class='py-5 purple text-center'>You have to pay $". ASTROLOGY. " for this seminar.</h4>");
            break;
            
    }
    
}

?>