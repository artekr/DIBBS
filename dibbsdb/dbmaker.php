<?php

$pServeur = "localhost";
$pNom = "root";
$pMotPasse = "";
$pBase = "dibbs";
// Connexion au serveur
$connexion = mysql_connect ($pServeur, $pNom, $pMotPasse);

set_time_limit(300000);
$myFile = "db.txt";
$fh = fopen($myFile, 'r');
$counter = 0;
$idLect;
$courseIDTemp = NULL;
while(!feof($fh))
{
    $line = fgets($fh);
    $tok = strtok($line, ";");
    $fchar = substr($line, 0, 1);

	if($fchar ===  "%")
    while($tok)
	{
	   //echo "**************NEW CLASS *******************<br />";
	   $courseIDTemp = substr($tok,1);
	   //echo $courseIDTemp;
	   $tok = strtok(";");
	   $cName = $tok;
	   $tok = strtok(";");
	   $creds = $tok;

	   echo( "INSERT INTO `dibbs`.`course` (`course_id`, `course_name`, `prerequisites`, `credits`) VALUES ('".$courseIDTemp."', '".$cName."', '', '".$creds."');");
	   break;
	}

//**************LECTURE ******************
	else if($fchar ===  "!")
	{    while($tok)
		{
		   $term = substr($tok,1);
		   $tok = strtok(";");
		   $idLect = $tok;
		   $tok = strtok(";");
		   $days = $tok;
		   $tok = strtok(";");
		   $time = $tok;
		   $tok = strtok(";");
		   $room = $tok;

		   $tok = strtok(";");
		   $prof = $tok;

		   $tok2 = strtok($time, "-");
		   $stime = $tok2;
		   $tok2 = strtok("-");
			$etime = $tok2;

			echo("INSERT INTO  `dibbs`.`course_lecture` (
			`lecture_id` ,
			`course_id` ,
			`professor` ,
			`term` ,
			`start_time` ,
			`end_time` ,
			`classroom`,
			`days`
			)
			VALUES ( '".$idLect."', '".$courseIDTemp."', '".$prof."',
				'".$term."', '".$stime."', '".$etime."', '".$room."', '".$days."');");

		   $counter++;
		   break;
		}


	}

	else if($fchar ===  "$")
		while($tok)
		{
		   $term = substr($tok,1);
		   $tok = strtok(";");
		   $idTut = $tok;
		   $tok = strtok(";");
		   $days = $tok;
		   $tok = strtok(";");
		   $time = $tok;
		   $tok = strtok(";");
		   $room = $tok;

		   $tok2 = strtok($time, "-");
		   $stime = $tok2;
		   $tok2 = strtok("-");
			$etime = $tok2;

		echo("INSERT INTO  `dibbs`.`tutorial_lab` (
			`tutorial_lab_id` ,
			`course_id` ,
			`start_time` ,
			`end_time` ,
			`classroom` ,
			`term`, `days`, `lecture_id`
			)
			VALUES ( '".$idTut."', '".$courseIDTemp."',
				 '".$stime."', '".$etime."', '".$room."', '".$term."', '".$days."', '".$idLect."');");

		   $counter++;
		   break;
	}

   else if($fchar ===  "&")
   	{
   	    echo("UPDATE `dibbs`.`course` SET `prerequisites` = '".substr($line,1)."' WHERE course_id = '".$courseIDTemp."';");
   	}
   	else if($fchar ===  "@")
	{
	  	//break;
		$idLect = "";
	}



}
fclose($fh);
?>