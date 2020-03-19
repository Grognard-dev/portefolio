

  <div class="contact">
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
  <div class="containers slider-container">
    <div  id="bouge" >
      <img class="partenaire-item"  src="img/boby.jpg" alt="">
    </div>
    <div id="bouge">
      <img class="partenaire-item" src="img/boby.jpg" alt="">
    </div>
    <div id="bouge">
      <img class="partenaire-item" src="img/boby.jpg" alt="">
    </div>
    <div id="bouge">
      <img class="partenaire-item" src="img/boby.jpg" alt="">
    </div>
  </div>
