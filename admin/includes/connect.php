 <?php
 
        //Connect to the MySQL database that is holding your data, replace the x's with your data
   $DBhost = "server261";
	     $DBuser = "meshwqob_euston";
	     $DBpass = "ns41M?+w!50q";
	     $DBname = "meshwqob_eustonadmin";
	      $connection = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
	    
	     if ($connection->connect_error) {
	         die("ERROR : -> ".$connection->connect_error);
	     }
?>
