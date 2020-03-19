 var acc = document.getElementsByClassName("button");
    var i;
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        this.parentElement.classList.toggle("active");
        
        var description = this.nextElementSibling;
        if (description.style.display === "flex") {
          description.style.display = "none";
        } else {
          description.style.display = "flex";
        }
      });
    } 
     var el = document.querySelector("button");
    el.addEventListener("mouseover", function( event ) {   
      event.target.style.color = "orange";
      setTimeout(function() {
        event.target.style.color = "";
      }, 500);
    }, false);
    
    $('.img-parallax').each(function(){
      var img = $(this);
      var imgParent = $(this).parent();
      function parallaxImg () {
        var speed = img.data('speed');
        var imgY = imgParent.offset().top;
        var winY = $(this).scrollTop();
        var winH = $(this).height();
        var parentH = imgParent.innerHeight();
    
    
        // The next pixel to show on screen      
        var winBottom = winY + winH;
    
        // If block is shown on screen
        if (winBottom > imgY && winY < imgY + parentH) {
          // Number of pixels shown after block appear
          var imgBottom = ((winBottom - imgY) * speed);
          // Max number of pixels until block disappear
          var imgTop = winH + parentH;
          // Porcentage between start showing until disappearing
          var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
        }
        img.css({
          top: imgPercent + '%',
          transform: 'translate(-50%, -' + imgPercent + '%)'
        });
      }
      $(document).on({
        scroll: function () {
          parallaxImg();
        }, ready: function () {
          parallaxImg();
        }
      });
    });
    
    
    