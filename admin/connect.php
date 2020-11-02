 <?php
 
        //Connect to the MySQL database that is holding your data, replace the x's with your data
   $DBhost = "localhost";
	     $DBuser = "root";
	     $DBpass = "";
	     $DBname = "eustonadminpanel";
	      $connection = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
	    
	     if ($connection->connect_error) {
	         die("ERROR : -> ".$connection->connect_error);
	     }
?>
