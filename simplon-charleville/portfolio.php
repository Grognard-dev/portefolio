<?php
$compteur = 1;

function randomimage(){
    global $compteur;
    $compteur = $compteur + 1;
    // $id= rand(1,60);
    return "https://i.pravatar.cc/150?u=".$compteur ;
}?>
<!doctype html>
<head>
    <html lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <?php include "header-portfolio.php"?>
    <div class="block">
        <img src="img/campus.jpg" data-speed="2" class="img-parallax">
        <h2>Encadrant</h2>
    </div>
    <div class="all_iconss">
        
        <figure class="top__icons"  data-aos="zoom-in-down">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Romain</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Natasha</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Boris</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
    </div>
    <div class="block">
        <img src="img/promo1.2_clodo.jpg" data-speed="1" class="img-parallax">
        <h2>Stagiaire</h2>
    </div>
    <div class="all_icons">
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Christophe</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Axel</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Steven</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Noel</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">kaader</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Mathieu</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Grégoire</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Ivan</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Vladimir</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Helsin</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Gorbatchev</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Sun Ren</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Sun jian</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Sun ce</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Cao Cao</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Liu bei</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Yuan shao</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Ma teng</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Dong zhuo</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <figure class="top__icons">
            <div class="icons">
                <img src="<?= randomimage()?>" alt="icon">
                <h1 class="nom">Lu bu</h1>
            </div>
            <button class="button">description</button>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam suscipit eveniet qui eligendi sequi enim a dolore. Inventore, cum perferendis placeat odio, deleniti quisquam, omnis harum pariatur obcaecati a odit!</p>
            </div>
        </figure>
        <div id="conteneur"><div id="bouge"><img src="img/giphy.gif" alt=""></div></div>
    </div>
    <div class="bas">
        <div class="form-form">
            <div class="contact">
                <h2 class="entreprise">Contact entreprise</h2>
                <form method="post">
                    <div class="formulaire">
                        <input type="text" class="form-control" placeholder="Nom" name="user_lastname" value="<?= htmlentities($nom ?? '') ?>">
                    </div>
                    <div class="formulaire">
                        <input type="text" class="form-control"  placeholder="Prénom" name="user_firstname" value="<?= htmlentities($prenom ?? '') ?>">
                    </div>
                    <div class="formulaire">
                        <input type="email" class="form-control"  placeholder="E-mail" name="user_email" value="<?= htmlentities($email ?? '') ?>">
                    </div>
                    <div class="formulaire">
                        <textarea class="text-area"  placeholder="Ecrivez votre message ici." name="user_message" rows="10" cols="50"><?= htmlentities($messages ?? '') ?></textarea>
                    </div>
                    <div>
                        <button class="form-button" type="submit" name="bouton" class="btn btn-primary mb-2">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/konami.js"></script>
    <script>var easter_egg = new Konami(function() {
        var conteneur = document.querySelector("#conteneur")
        conteneur.style.display="block"
    });</script>
    <script src="js/aos.js"></script>
    <script>AOS.init({});</script>
    
    
</body>
</html>