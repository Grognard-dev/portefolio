
 // on gere l affichage du menu responsif pour les ecrans inf  ou egaux a medium (<992px)
  $(".navbar-responsive").toggle();

  $(".menu").click(function () {
    $(".navbar-responsive").toggle("slow");
  });

  // On gère le scroll vers les différentes sections du site
  $(".scroll").click(function() {
    var section = $("." + this.id);
    $("html,body").animate({scrollTop: section.offset().top}, 'slow');
  });


  
