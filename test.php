<?php
require ("connexion.php");

     connect_db ();
     $result = ExecQuery("SELECT * FROM course WHERE course_id LIKE 'C%'");//, $connection);
	for($i=0; $i<mysql_num_rows($result); $i++){
		$Ligne = mysql_fetch_object($result);
		echo $Ligne->course_id;
		echo "<br />";
	}


?>