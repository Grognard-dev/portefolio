
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CV</title>
<link rel="stylesheet" href="highlight/styles/obsidian.css">
<link rel="stylesheet" href="css/style.css">


</head>
<?php include "header.php"?>

<body>
<div class="colonne">
<h1>Securistaion de Page</h1>
<h2>fonction de verification du mot de passe</h2>
<pre><code>
function verify_password($password, $h){
    return password_verify($password, $h);
}
function verify_username($username){
    return  $username === 'grognard';
}
</code></pre>
<pre>Mot de passe hasher = $hash = '$2y$10$kwYcPAEmo/sZu/mJxFrQrOygzVgz9tp4rT7HD0NXm08QF51vajO7O';</pre>

<h2>condition du bouton</h2>
<pre><code> if (isset($_POST['bouton'])){  
    Variable pour les logins
    $username = empty($_POST['user_name']) ? null : $_POST['user_name'];
    $passwords = empty($_POST['password']) ? null : $_POST['password'];
    $email = empty($_POST['email']) ? null : $_POST['email'];
    </code></pre>          
    <h2>condition de champs remplis</h2>
    <pre><code>  if ($username === null || $passwords === null || $email === null){
        $message = 'Pas remplis....'; 
    }
    </code></pre>
        <h2>Variable de verification avant de passer a la condition pour ce login et eviter les timings attaque</h2>
        <pre><code> $hack = verify_password($passwords, $hash);
        $bob = verify_username($username);
        </code></pre>
        <h2> Condition de verification des logins et enregistrement des logins dans la session pour acceder a la page protéger</h2>
        <pre><code>
        if ($hack  && $bob && $email === 'lefevre.gregoire19@gmail.com'){
            session_start();
            $_SESSION['login'] = $username;
            header('Location: http://lefevre.simplon-charleville.fr/portefolio/email.php');
            exit();
        }else {
            $message = 'mot de passe incorrect';
        }
        </code></pre>
        <h2> Verification des logins de la page precedentes sinon renvoye vers la page d'accueil </h2>
        <pre><code>
        session_start();
        if(!isset($_SESSION['login'])) 
        {
            header('Location: http://lefevre.simplon-charleville.fr/portefolio');
            exit();
        }
        </code></pre>
        <h3>bouton de déconnexion et suppression des logins de la sessions pour éviter de revenir sur la page sans avoir entrer les logins dans la page logins</h3>
        <pre><code>
        session_start();
        
        $_SESSION = array();
        
        session_destroy();
        header('Location: http://lefevre.simplon-charleville.fr/portefolio');
        </code> </pre>
        </div>
        <?php include "footer.php"?>
        <script src="highlight/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        </body>
        </html>