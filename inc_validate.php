<?php


//created by Akash Maddala
function validateString($string){
    
    if(!empty($string) && !ctype_space($string) and ctype_alpha($string)){
        return true;
    }else{
        return false;
    }
    
    
}


function validateNumber($number){
    if(is_numeric($number)){
        return true;
    }else{
        return false;
    }
    
}

function validateAlphanumeric($string){
    
    if(!empty($string) && !ctype_space($string) and ctype_alnum($string)){
        return true;
    }
    else{
        return false;
    }
}
?>