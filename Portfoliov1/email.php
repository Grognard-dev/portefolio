<?php  
session_start();
if(!isset($_SESSION['login'])) 
{
  header('Location: http://lefevre.simplon-charleville.fr/portefolio');
  exit();
}

$user = "dbu164958";
 $pass = "***REMOVED***";
 
 $dbh = new PDO('mysql:host=db5000303931.hosting-data.io;dbname=dbs296967', $user, $pass);
       
    
    $sth = $dbh->prepare("SELECT nom, prenom, emails, messages FROM emailportfolio");
    $sth->execute();
    $result = $sth->fetchAll();
    
    foreach($result as $tableau){
        echo $tableau['nom']. ' ' .$tableau['prenom']. '<br>' .$tableau['emails']. '<br>';
    }
    
    ?>
    <a href="deconnexion.php">Deconnexion</a>