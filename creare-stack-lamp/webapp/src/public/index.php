<?php

/**
 * Questo esempio serve a comprovare la connessione tra container
 *
 *
 *
**/

$hostname = "datastore";

$dbname = "myschema";

$dbuser = "mydbuser";

$dbpassword = "1234test";

try{
	// Tentativo di connessione al container Mariadb/DB
	$connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword);
} catch(\PDOException $ex) {
	echo "Errore di connesstione al DB: " . $ex->getMessage();
	die();
}

$query = "SELECT * FROM fruit ORDER BY name";
$stmt = $connection->prepare($query);
$stmt->execute();

echo "Questo e' l'elenco di frutti disponibili nel DB: <br>";


echo "<ul>";

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	echo "<li>" . $row['name']  . " - " .  $row['variety'] . "</li>";
}

echo "</ul>";

