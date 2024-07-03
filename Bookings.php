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
                       		 	<a href="index.php">Banking</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="ViewCustomers.php">Customer Details</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Transfer.php">Fund Transfer</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="RecordsPage.php">Transaction History</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Aboutus.php">About Us</a>
                    		</li>
						</ul>

					</nav>
				</td>
				<!-- main content -->
				<td class="tdRightLayout">
					<h1>Seminars</h1>
					<p style= "text-align: center;">Here are the upcoming seminars:</p>
				
					<?php 
                        include 'inc_dbConfig.php';
                        $result;
                        $sql = "SELECT
						seminars.*,
						10-COUNT(bookings.seminar) AS `available slots`
						FROM seminars
						LEFT JOIN bookings ON seminars.name = bookings.seminar
						GROUP BY seminars.name, seminars.presenter, seminars.`date and time`, seminars.venue";
						//$sql = "SELECT * from seminars";
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
                <div>      
					<form class="buttonsSTyling" action='BookingForm.php'>
						<input type="submit" value="Book Seminars" name = "bookSeminar" class="btn btn-primary">
					</form>
				</div>
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