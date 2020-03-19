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
        <a href="#" class="button">
            Button Text
<span><svg> <use xlink:href="#arrow" href="#arrow"></use></svg></span>
        </a>
        </div>
</div><br>

 
<div class="container">
    <div class="content">
        <a href="#" class="button">
            Button Text
<span><svg> <use xlink:href="#arrow" href="#arrow"></use></svg></span>
        </a>
        </div>
</div><br>

 <div class="container">
    <div class="content">
        <a href="#" class="button">
            Button Text
<span><svg> <use xlink:href="#arrow" href="#arrow"></use></svg></span>
        </a>
        </div>
</div><br>
</aside>
<div class="parallax"></div>

<?php
include "projet.php";
?>
</body>
</html>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <defs>
      <symbol id="arrow" viewBox="0 0 100 100">
        <path d="M12.5 45.83h64.58v8.33H12.5z"/>
            <path d="M59.17 77.92l-5.84-5.84L75.43 50l-22.1-22.08 5.84-5.84L87.07 50z"/>
      </symbol>
  </defs>
</svg>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
ScrollReveal().reveal('.panneau ,projet', { duration: 2000, reset: true });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init({mirror: true});</script>
<script src="js/konami.js"></script>
<script>
var easter_egg = new Konami(function() {
  var conteneur = document.querySelector("#conteneur")
  conteneur.style.display="block"
});
</script>

<script>
var acc = document.getElementsByClassName("buttonexperience");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    
    var textexpcomp1 = this.nextElementSibling;
    if (textexpcomp1.style.display === "block") {
      textexpcomp1.style.display = "none";
    } else {
      textexpcomp1.style.display = "block";
    }
  });
} 
var acc = document.getElementsByClassName("buttoncompetence");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active2");
    
    var textexpcomp2 = this.nextElementSibling;
    if (textexpcomp2.style.display === "block") {
      textexpcomp2.style.display = "none";
    } else {
      textexpcomp2.style.display = "block";
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
var els = document.querySelector(".buttoncompetence");
els.addEventListener("mouseover", function( event ) {   
  event.target.style.color = "orange";
  setTimeout(function() {
    event.target.style.color = "";
  }, 500);
}, false);
</script>
<?php
include "footer.php";
?>
<div id="conteneur"><div id="bouge"><img src="image/d3dc8d_4431866.gif" alt=""></div></div>

