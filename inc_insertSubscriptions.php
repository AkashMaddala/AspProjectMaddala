<?php
//created by Akash Maddala

include("inc_dbConfig.php");


$result;

$email = $_POST["mailTextbox"];
$name = $_POST["nameTextbox"];
$phonenumber = $_POST["numberTextbox"];

if( isset($_POST["textCheckBox"])){
    $text = 1;
}else{
    $text = 0;
}
if( isset($_POST["emailCheckBox"])){
    $emailNotify = 1;
}else{
    $emailNotify = 0;
}


// $invoice = $_POST["invoice"];;
// $msrp = $_POST["msrp"];

$sql = "INSERT INTO subscriptions (emailaddress, phonenumber, name, text, email) VALUES ('$email' , '$phonenumber','$name', '$text','$emailNotify')";

$connection = new mysqli($host, $username, $password, $dbname);
if($connection->errno){
    ("connection failed: ". $connection->connect_error);
    echo("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
    die("DBMS connect failed - errno: " . $connection->connect_errno . PHP_EOL);
    
}
try{
    if($connection->query($sql)){
        switch(true){
            case ($text==1 and $emailNotify==1):
                echo("<p style='text-align: center' class='purple'><b>You have subscribed!!!</b> you will recieve  notifications through both texts and emails to your preferred phonenumber:$phonenumber  and email:  $email</p>");
                break;
            case ($text==1):
                echo("<p style='text-align: center'><b>You have subscribed!!!</b> you will recieve  notifications through texts to your preferred phone number: $phonenumber</p> ");
                break;
            case ($emailNotify==1):
                echo("<p style='text-align: center'><b>You have subscribed!!!</b> you will recieve  notifications through emails to your preferred email: $email</p>");
                break;
           
        }
        echo("<br>");
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