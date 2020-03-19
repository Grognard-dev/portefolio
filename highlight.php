<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="highlight/styles/arta.css">
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<?php include "header.php"?>

<body>
    <div class="colonne">
        <h1>Hasher son mot de passe</h1>
        <h2>le code pour hasher votre mot de passe </h2>
        <pre><code>
            <?php
                echo hash('ripemd160', 'Le rapide goupil brun sauta par dessus le chien paresseux.');
            ?>
</code></pre>
        <h2>l'algo</h2>
        <span>ici l'algo du code est ripemd160, il y a different algo (je vous laisse vous renseigner)</span>
        <h2>le mot de passe hasher que vous allez avoir</h2>
        <span> cdb8426cb020896cea1d040e62a0f8cf9f5b4226</span>
        <h3>je vous renvoi vers le Tips de sécurisation pour savoir ou le mettre en cas de sécurisation de page</h3>
        <span>L'interet de hasher est de ne pas faire apparaitre son mot de passe dans son php et que le mot de passe hasher n'est pas réversible , alors impossible de s'en servir pour dévoiler votre mot de passe</span>
        </div>
         <?php include "footer.php"?>
        <script src="highlight/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        </body>
        </html>>