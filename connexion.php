<?php
function connect_db ()  {
  $pServer = "localhost";
  $pName = "root";
  $pPwd = "";
  $pDB = "dibbs";
  // Connection to server
  $connection = mysql_connect ($pServer, $pName, $pPwd);
  if (!$connection)  {
    echo "Connection to $pServer impossible\n";
    exit;
  }

  // Connexion à la base
  if (!mysql_select_db ($pDB, $connection))  {
    echo "DB connection $pDB impossible\n";
    echo "<B>Message of MySQL :</B> " . mysql_error($connection);
    exit;
  }
  // On renvoie la variable de connexion
  return $connection;
} // Fin de la fonction

function deconnection($cnx){
	$res=mysql_close($cnx);
	return $res;
}

function ExecQuery ($query) {
      $connection = connect_db();
      $result = mysql_query ($query, $connection);
      if ($result)         {
         return $result;      }
        else      {
          echo "Erreur dans l'exécution de la requête <B>'$query'.</B><BR>";
          echo "<B>Message :</B> (". mySql_errno($connection).") " .  mySql_error($connection);
          exit;  }
   }
?>