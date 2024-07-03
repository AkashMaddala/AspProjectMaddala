<?php

//created by Akash Maddala
include("inc_dbConfig.php");
$result;
$sql = "SELECT * from bookings where emailaddress = '$email'";

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

						<h3 style="text-align: center">Your bookings are:</h3>
						<br>
						<br>
						<table>
						

						<?php 

                            $columnNames = "<tr>";
                            $numberOfColumns = $result->field_count;
                            $columnInfo = $result->fetch_fields();
    
                            foreach ($columnInfo as $column){
                            $columnNames .= "<th>". ucfirst($column->name)."</th>";
        
                            }
                            echo "$columnNames </tr> ";
    
    
                            while($row = $result->fetch_assoc()){
                            print("<tr>");
                            foreach ($row as $value){
                            print ("<td>$value</td>");
                            }
                            
                             print("</tr>");
                             }
						
                          ?>
                          </table>		