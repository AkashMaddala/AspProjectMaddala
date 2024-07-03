<?php

//created by Akash Maddala
include("inc_functionFile.php");

$result;

$result = getInfo();

    while($row = $result->fetch_assoc()){
        foreach ($row as $value){

            print ("<p>$value</p>");

        }

    }

?>







