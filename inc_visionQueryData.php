<?php

include('inc_visionFunctionFile.php');

$result;

$result = getvisionInfo();


while ($row = $result->fetch_assoc()) {
    print(" <table class='tableBorder'><tr><td class='cardTableStyles'><table >
                                <th>
                                Vision Statement
                                </th>
                                <p></p>
                                <tr>");
    foreach ($row as $value){
        print("<td class='cardStyles'>$value</td>");
    }
    print("</tr></table></td>");
}

?>







