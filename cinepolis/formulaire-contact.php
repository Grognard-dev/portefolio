<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/formulaire.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link    href="https://fonts.googleapis.com/css?family=Anton|Archivo+Black|Cabin|Fredoka+One|Krona+One|Passion+One&display=swap"
    rel="stylesheet">

    <title>Formulaire de contact</title>
  </head>
  <body>
  
  <?php include 'header.php';?>
    <div class="website">
  	<div class="row">
  		<div class="col-12">
        <div class="logo">
          <a href="index.php"><img src=images/left-arrow.png alt=""/></a>
        </div>
  			<h1 class="titre">Formulaire de contact</h1>
  		</div>
  	</div>
    <form method="post" >
      <div class="name">
       <div class="row">
         <div class="col-6">
          <input type="text" class="form-control" placeholder="First name" name="user_firstname">
         </div>
         <div class="col-6">
          <input type="text" class="form-control"  placeholder="Last name" name="user_lastname">
         </div>
       </div>
      </div>
       <div class="row">
       	 <div class="col-12">
       	 	<div class="email">
       	 	<input type="email" class="form-control"  placeholder="E-mail" name="user_email">
       	 	</div>
       	 </div>
       	</div>
        <div class="row">
          <div class="col">
            <div class="text-area">
              <textarea class="text-area"  placeholder="Envoyer message ici!" name="user_message" rows="10" cols="50"></textarea>
            </div>
          </div>
        </div>
        <div class="rows">
          <div class="col-12">
            <div class="bouton">
              <button type="submit" name="bouton" class="btn btn-primary mb-2">Envoyé</button>
            </div>
          </div>
        </div>
    </form>
    <?php include 'traitement.php'?>
    
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
 	
  </body>
</div>
 </html>