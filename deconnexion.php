<?php  
ini_set("display_errors", "on"); 
error_reporting(E_ALL);

session_start();

$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]);
}
session_destroy();
header('Location: http://lefevre.simplon-charleville.fr/portefolio');