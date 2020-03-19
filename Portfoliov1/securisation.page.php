
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<title>CV</title>
</head>


<body>
<ul>
<ul> <h2>fonction de verification du mot de passe</h2>
<li>
function verify_password($password, $h){
    return password_verify($password, $h);
}<br>


function verify_username($username){
    return  $username === 'grognard';
}
</li>
</ul>
<p>Mot de passe hasher = $hash = '$2y$10$kwYcPAEmo/sZu/mJxFrQrOygzVgz9tp4rT7HD0NXm08QF51vajO7O';</p>
<br>
<ul>  <h3>condition du bouton</h3>
<li> if (isset($_POST['bouton'])){  
    <ul> <h3>Variable pour les logins</h3>
    <li>   $username = empty($_POST['user_name']) ? null : $_POST['user_name'];<br>
    $passwords = empty($_POST['password']) ? null : $_POST['password'];<br>
    $email = empty($_POST['email']) ? null : $_POST['email'];<br>
    </li>
    <li><h4>condition de champs remplis</h4>
    if ($username === null || $passwords === null || $email === null){ <br>
        $message = 'Pas remplis....'; <br> </n>
    }else{
        </li>
        </li>
        </ul>
        
    }
    </li>
    </lu> 
    <lu><h3>Variable de verification avant de passer a la condition pour ce login et eviter les timings attaque</h3>
    <li>$hack = verify_password($passwords, $hash);<br>
    $bob = verify_username($username);
    </li>
    <ul><h3> Condition de verification des logins et enregistrement des logins dans la session pour acceder a la page protéger</h3>
    <li>
    if ($hack  && $bob && $email === 'lefevre.gregoire19@gmail.com'){<br>
        </li>
        <br>
        <li>
        session_start();<br>
        $_SESSION['login'] = $username;<br>
        header('Location: http://lefevre.simplon-charleville.fr/portefolio/email.php');<br>
        exit();<br>
    }else {<br>
        $message = 'mot de passe incorrect';<br>
    }<br>
    </li>
}
}
</li>
</ul>
<ul><h3> Verification des logins de la page precedentes sinon renvoye vers la page d'accueil </h3>
<li>
session_start();<br>
if(!isset($_SESSION['login'])) <br>
{<br>
    header('Location: http://lefevre.simplon-charleville.fr/portefolio');
    exit();
}<br>
</li>
<ul><h4>bouton de déconnexion et suppression des logins de la sessions pour éviter de revenir sur la page sans avoir entrer les logins dans la page logins</h4>
<li>
session_start();<br>

$_SESSION = array();<br>

session_destroy();<br>
header('Location: http://lefevre.simplon-charleville.fr/portefolio');<br>
</li>
</ul>
</ul>
</body>
</html>