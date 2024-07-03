<?php
//created by Akash Maddala

include("inc_dbConfig.php");

$result;

$license = $_POST["nameOfPerson"];
$year = $_POST["age"];
$make = $_POST["gender"];
$model = $_POST["dob"];
$mileage = $_POST["time"];
// $invoice = $_POST["invoice"];;
// $msrp = $_POST["msrp"];

$sql = "INSERT INTO horoscope (name, age, gender, dob, time) VALUES ('$license' , '$year', '$make', '$model' , '$mileage' );";

$connection = new mysqli($host, $username, $password, $dbname);
if($connection->errno){
    ("connection failed: ". $connection->connect_error);
    echo("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
    die("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
    
}
try{
    if($connection->query($sql)){
        include 'inc_checkhoroscope.php';
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

?>