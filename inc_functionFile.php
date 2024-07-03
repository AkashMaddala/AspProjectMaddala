<?php


//created by Akash Maddala
//functions file

include("inc_databaseClass.php");

function getInfo(){
    $dbClass = new DatabaseClass();
    $selectSql = "SELECT  aboutus From home"; 
    //call the select query method of dbclass
    try{
        $result = $dbClass->Select($selectSql);
        if($result){
            return $result;
          
        }
        
    }catch(Exception $e){
        
        echo"<script>window.alert(".$e->getMessage().")</script>";
        
    }
    
}

?>