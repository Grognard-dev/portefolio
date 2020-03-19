

<?php
$user = "dbu164958";
$pass = "***REMOVED***";

$dbh = new PDO('mysql:host=db5000303931.hosting-data.io;dbname=dbs296967', $user, $pass);


$bdd->exec('INSERT INTO email (emails) VALUES(\'nom\')');
$req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'email' => $email,
	'messages' => $messages
    ));     

echo 'Sa a été ajouter  !';
?>
