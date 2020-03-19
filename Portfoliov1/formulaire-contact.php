
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <title>Formulaire de contact</title>
    </head>
    
<body>
<?php include "header.php";
require "traitement.php";?>
    
<h1 class="titreform">Formulaire de contact</h1>

<form method="post">
  <div class="formulaire">
    <input type="text" class="form-control" placeholder="Last name" name="user_lastname" value="<?= htmlentities($nom ?? '') ?>">
  </div>
  <div class="formulaire">
    <input type="text" class="form-control"  placeholder="First name" name="user_firstname" value="<?= htmlentities($prenom ?? '') ?>">
  </div>
  <div class="formulaire">
    <input type="email" class="form-control"  placeholder="E-mail" name="user_email" value="<?= htmlentities($email ?? '') ?>">
  </div>
  <div class="message">
    <textarea class="text-area"  placeholder="Envoyer message ici!" name="user_message" rows="10" cols="50"><?= htmlentities($messages ?? '') ?></textarea>
  </div>
  <div class="bouton">
    <button type="submit" name="bouton" class="btn btn-primary mb-2">Envoyé</button>
  </div>
</form>
<?php 
      include "footer.php"
?>
 <script src="js/konami.js"></script>
        <script>
            var easter_egg = new Konami(function() {
                var conteneur = document.querySelector("#conteneur")
                conteneur.style.display="block"
            });
        </script>
        <div id="conteneur"><div id="bouge"><img src="image/d3dc8d_4431866.gif" alt=""></div></div>

</body>
</html>
