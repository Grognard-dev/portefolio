<?php
ini_set("display_errors", "on"); 
error_reporting(E_ALL);
function verify_password($password, $h){
  return password_verify($password, $h);
}

function verify_username($username){
    return  $username === 'grognard';
}

$hash = '$2y$10$kwYcPAEmo/sZu/mJxFrQrOygzVgz9tp4rT7HD0NXm08QF51vajO7O';
   if (isset($_POST['bouton'])){  
    $username = empty($_POST['user_name']) ? null : $_POST['user_name'];
    $passwords = empty($_POST['password']) ? null : $_POST['password'];
    $email = empty($_POST['email']) ? null : $_POST['email'];
  
    if ($username === null || $passwords === null || $email === null){
        $message = 'Pas remplis....';
    }else {
       
$hack = verify_password($passwords, $hash);
$bob = verify_username($username);
        if ($hack  && $bob && $email === 'lefevre.gregoire19@gmail.com'){
            session_start();
            $_SESSION['login'] = $username;
            header('Location: http://lefevre.simplon-charleville.fr/portefolio/email.php');
            exit();
        }else {
            $message = 'mot de passe incorrect';
        }
    }
}
   
    ?>
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

<?php include "header.php";
if (isset($message)){
    echo $message;
}else {
    
}
    
?>
    <form method="post">
        <div class="username">
            <input type="text" placeholder="Username" name="user_name">
        </div>
        <div class="password">
            <input type="password" placeholder="Password" name="password" >
        </div>
        <div class="email">
            <input type="email" placeholder="E-mail" name="email" >
        </div>
        <div class="bouton">
            <input type="submit" name="bouton" placeholder="Envoyer" id="">
        </div>
    </form>

<?php include "footer.php";?>
</body>
</html>
