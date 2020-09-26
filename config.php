<?php

/* DB config */
	// DB IP 4
	$dbip = "178.63.239.102"; 
	
	//Database username
	$dbuser = "root"; 

	//Database password
	$dbpass = "5552913RedaAtefAmr"; 
	


	

/* END */



		/* Register Page */
				$tag = "Show me your S4League";
		/* END */
	
// DON'T CHANGE ANYTHING BELOW UNLESS YOU KNOW WHAT YOU'RE DOING!!
$sql = mysql_connect($dbip, $dbuser, $dbpass) or die ("Database server unreachable");  
mysql_select_db("Performance") or die ("No connection establish"); 



?>
