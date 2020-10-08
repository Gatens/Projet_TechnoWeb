<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="main.css" />

  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
  </head>

  <body>

    <div class="container text">
    <a href="#" class="title">Homepage</a>
    <p> Bonjour, bienvenue sur notre site !
        Vous pouvez vous entrainez sur nos quizz sous format QCM afin de vous perfectionner comme nous nous perfectionnons nous aussi en html css et php.</p>

        <div id="imageQuizz">

        <img class="imageQuizz" src="quizz.png">
        </div>

        <div class="bouton">
          <a href="quizz1.php" class="bouton1">QUIZZ 1</a>
          <a href="quizz2.php" class="bouton2">QUIZZ 2</a>
        </div>

    <a href="account.php" class="onglet">Account</a>


  <?php include('footer.php') ?>

  </body>

</html>
