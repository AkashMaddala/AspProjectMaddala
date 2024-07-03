<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
	<link rel = "stylesheet" type="text/css" href = "css/bookings.css">
	</head>
	<body>
		<a id="Top"></a>
		<table class = "tb1PageLayout">
			<tr class="trTopLayout">
			    <!-- Logo code in header -->
				<th colspan = "2" class="logo-img">
					<p>
                    <a href="home.php">                   	
                        <img src="./images/starf.png" alt="STARDOTCOM">
                        <img src="./images/dotcom2.png" alt="STARDOTCOM">
                    </a>
                    </p>
                
				</th>
			</tr>
			<!-- Navigation -->
			<tr class="trCenterLayout">
				<td class="tdLeftLayout">
					<nav>
						<ul>
							 <li class="li-style">
                       			 <a href="home.php">Home</a>
                    		</li>
                    		<li class="li-style">
                      		  	<a href="Horoscope.php">Horoscope</a>
                   			 </li>
                   			 <li class="li-style">
                      			<a href="Gaming.php">Gaming</a>
                    		</li>
                    		<li class="li-style">
                        		<a href="Bookings.php">Seminars</a>
                   			 </li>
                    		<li class="li-style">
                        		<a href="mybookings.php">My Bookings</a>
                    		</li>
                    		
                    		<li class="li-style">
                       		 	<a href="Landmarks.php">Landmarks</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="Subscriptions.php">Subscriptions</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Pacman.php">Pacman</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="Aboutus.php">About Us</a>
                    		</li>
						</ul>

					</nav>
				</td>
				<!-- main content -->
				<td class="tdRightLayout">
				<a href = "mybookings.php" class="linkStyling"> Go Back </a>
				
				<h2 class="my-4">View all your seminar bookings here</h2>
				
				<div class="buttonsSTyling tableDisplay">
	
				</div>
					<?php 
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "stardotcom";
                        $result;
                        $sql = "SELECT * from bookings";
                        //$sql .= "SELECT mission from stardotcomeinfo";
                        $connection = new mysqli($servername, $username, $password, $dbname);

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

<!--<h2>Vision</h2> -->

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
					<p>
						<a href="#Top">Go To Top of the page</a>
					</p>
				</td>
				<!-- Footer -->
				<tr class="trBottomLayout">
					<td class="tdFoot" colspan = "2">
					<!-- Page footer -->
						<p>copyright &copy; Akash Maddala University of Central Missouri &#8482;</p> 
					</td>
			</tr>
		</table>
	
	
	
	</body>
</html>