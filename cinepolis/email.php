<?php  

$user = "dbu164958";
 $pass = "***REMOVED***";
 
 $dbh = new PDO('mysql:host=db5000303931.hosting-data.io;dbname=dbs296967', $user, $pass);
       
    
    $sth = $dbh->prepare("SELECT nom, prenom, emails, messages FROM email");
    $sth->execute();
    $result = $sth->fetchAll();
    
    foreach($result as $tableau){
        echo $tableau['nom']. ' ' .$tableau['prenom']. '<br>' .$tableau['emails']. '<br>';
    }
    