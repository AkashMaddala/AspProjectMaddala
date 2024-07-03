<?php
//created by Akash Maddala
include("inc_dbConfig.php");
$result;
$sql = "SELECT name from seminars";
//$sql .= "SELECT mission from stardotcomeinfo";
$connection = new mysqli($host, $username, $password, $dbname);

if($connection->errno){
    ("connection failed: ". $connection->connect_error);
    echo("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
    die("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
    
}
try{
    if(!($result = $connection->query($sql)) ){
        throw new Exception("Select Query failed" . $connection->error);
    }
    
}catch (Exception $e){
    die("Error:  ".$e->getMessage());
}
?>

						

						