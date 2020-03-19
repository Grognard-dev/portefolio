<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV</title>
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include "header.php";
    include "split.php";
  ?>
  
  <aside class="sidebar" data-aos="fade-left" data-aos-duration="3000">
    
    <div class="container">
      <div class="content">
        <a href="securisation.page.php" class="button">
          Tips sécurisation page
          <span><svg> <use xlink:href="#arrow" href="#arrow"></use></svg></span>
        </a>
      </div>
    </div><br>
    
    
    <div class="container">
      <div class="content">
        <a href="tips-easter-egg.php" class="button">
          Tips Easter egg
          <span><svg> <use xlink:href="#arrow" href="#arrow"></use></svg></span>
        </a>
      </div>
    </div><br>
    
    
    <div class="container">
      <div class="content">
        <a href="tips.hasher.php" class="button">
          tip hasher MDP
          <span><svg> <use xlink:href="#arrow" href="#arrow"></use></svg></span>
        </a>
      </div>
    </div><br>
    

  <div class="parallax"></div>
  
  <?php
  include "projet.php";
  ?>

  <script>
    var acc = document.getElementsByClassName("buttonexperience");
    var i;
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active1");
        
        var textexpcomp1 = this.nextElementSibling;
        if (textexpcomp1.style.display === "flex") {
          textexpcomp1.style.display = "none";
        } else {
          textexpcomp1.style.display = "flex";
        }
      });
    } 
    var acc = document.getElementsByClassName("buttoncompetence");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active2");
        
        var textexpcomp2 = this.nextElementSibling;
        if (textexpcomp2.style.display === "flex") {
          textexpcomp2.style.display = "none";
        } else {
          textexpcomp2.style.display = "flex";
        }
      });
    } 
     var acc = document.getElementsByClassName("buttonhobby");
    var i;
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active3");
        
        var textexpcomp3 = this.nextElementSibling;
        if (textexpcomp3.style.display === "flex") {
          textexpcomp3.style.display = "none";
        } else {
          textexpcomp3.style.display = "flex";
        }
      });
    } 
     var acc = document.getElementsByClassName("buttonetude");
    var i;
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active4");
        
        var textexpcomp4 = this.nextElementSibling;
        if (textexpcomp4.style.display === "flex") {
          textexpcomp4.style.display = "none";
        } else {
          textexpcomp4.style.display = "flex";
        }
      });
    } 
    var el = document.querySelector(".buttonexperience");
    el.addEventListener("mouseover", function( event ) {   
      event.target.style.color = "orange";
      setTimeout(function() {
        event.target.style.color = "";
      }, 500);
    }, false);
    var el = document.querySelector(".buttoncompetence");
    el.addEventListener("mouseover", function( event ) {   
      event.target.style.color = "orange";
      setTimeout(function() {
        event.target.style.color = "";
      }, 500);
    }, false);
  
  var el = document.querySelector(".buttonhobby");
    el.addEventListener("mouseover", function( event ) {   
      event.target.style.color = "orange";
      setTimeout(function() {
        event.target.style.color = "";
      }, 500);
    }, false);

  var el = document.querySelector(".buttonetude");
    el.addEventListener("mouseover", function( event ) {   
      event.target.style.color = "orange";
      setTimeout(function() {
        event.target.style.color = "";
      }, 500);
    }, false);
  
  </script>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol id="arrow" viewBox="0 0 100 100">
        <path d="M12.5 45.83h64.58v8.33H12.5z"/>
        <path d="M59.17 77.92l-5.84-5.84L75.43 50l-22.1-22.08 5.84-5.84L87.07 50z"/>
      </symbol>
    </defs>
  </svg>
  
  <script src="js/scrollreveal.min.js"></script>
  
  <script>
    ScrollReveal().reveal('.panneau ,projet', { duration: 2000, reset: true });
  </script>
  
  <script src="js/aos.js"></script>
  <script>AOS.init({mirror: true});</script>
  
  <script src="js/konami.js"></script>
  <script>
    var easter_egg = new Konami(function() {
      var conteneur = document.querySelector("#conteneur")
      conteneur.style.display="block"
    });
  </script>
  
  
  <?php
  include "footer.php";
  ?>
  <div id="conteneur"><div id="bouge"><img src="image/d3dc8d_4431866.gif" alt=""></div></div>
</body>
</html>
