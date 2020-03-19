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
        <h1>Easter egg</h1>
        <h2>Script a mettre pour l'easter egg</h2>
        <pre><code>
             src="js/konami.js">
            
                var easter_egg = new Konami(function() {
                    var conteneur = document.querySelector("#conteneur")
                    conteneur.style.display="block"
                });
            
        </code></pre>
        <h2>l'animation de mon easter egg</h2>
        <pre><code>
            @keyframes mouvement-uniforme {
                0% 		{ animation-timing-function: linear; transform: translateX(-50px) rotateY(0deg); }
                50% 	{ animation-timing-function: linear; transform: translateX(100%) rotateY(0deg); }
                51% 	{ animation-timing-function: linear; transform: translateX(100%) rotateY(180deg); }
                100%    { animation-timing-function: linear; transform: translateX(-50px) rotateY(180deg); }
            }
        </code></pre>
        <h2>le css du mouvement de mon animation</h2>
        <pre><code>
            #bouge{ 
                color:#3366cc;
                font-size:1.2em; 
                animation: mouvement-uniforme 10s infinite;
                transform-origin: 0 0;
            }
        </code></pre>
        <h2>le conteneur css de l'animation qui est lier au script</h2>
        <pre><code>
            #conteneur{
                width: 100%;
                overflow: hidden;
                background: #003366;
                display: none;
            }
        </code></pre>
        <h2>le html de mon easter egg</h2>
        <pre><code class="html">
         id="conteneur">< id="bouge">< (img) src="image/d3dc8d_4431866.gif" alt="">
        </code></pre>
    </div>
    <?php include "footer.php"?>
    <script src="highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>