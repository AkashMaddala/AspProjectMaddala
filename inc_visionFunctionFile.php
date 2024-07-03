<?php

//functions file
//created by Akash Maddala
include('inc_visionDBClass.php');

function getvisionInfo(){
    
    $dbClassvision = new DatabasevisionClass();
    
    $selectSql = "SELECT  vision From stardotcominfo";
    
    
    
    
    
    //call the select query method of dbclass
    
    try{
        
        $result = $dbClassvision->Select($selectSql);
       
        if($result){
            
            return $result;
            
        }
        
    }catch(Exception $e){
        
        echo"<script>window.alert(".$e->getMessage().")</script>";
        
    }
    
}

?>