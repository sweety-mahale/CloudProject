 <?php
 // DB connection info
 $host = "tcp:web-mysql-server.mysql.database.azure.com";
 $user = "sgdvkpajsv";
 $pwd = "4RJ61113SP3T3W0L$";
 $db = "registration";
 try{
 	$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
 	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 	$sql = "CREATE TABLE registration_tbl(
 	id INT NOT NULL IDENTITY(1,1) 
 	PRIMARY KEY(id),
 	name VARCHAR(30),
 	email VARCHAR(30),
 	date DATE)";
 	$conn->query($sql);
 }
 catch(Exception $e){
 	die(print_r($e));
 }
 echo "<h3>Table created.</h3>";
 ?>