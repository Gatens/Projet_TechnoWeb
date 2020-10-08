<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="quizz.css" />
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id='container'>
    <?php include('header.php') ?>
    <div id="content">
      <p>Quizz</p>
  <form action="" method="post">
  <fieldset class="question1">
    <a class="titre">De quelle couleur est le cheval d'Henri IV</a>
    <div class="Choix1">
    <input type="radio" name="radio" id="radio"> <label for="radio">Reponse A</label>
    <input type="radio" name="radio" id="radio"> <label for="radio">Reponse B</label>
    <input type="radio" name="radio" id="radio"> <label for="radio">Reponse C</label>
    <input type="radio" name="radio" id="radio"> <label for="radio">Reponse D</label>
    </div>
  </fieldset>
</form>
<form action="" method="post">
<fieldset class="question1">
  <a class="titre">Question 2 ?</a>
  <div class="Choix1">
  <input type="radio" name="radio" id="radio"> <label for="radio">Reponse A</label>
  <input type="radio" name="radio" id="radio"> <label for="radio">Reponse B</label>
  <input type="radio" name="radio" id="radio"> <label for="radio">Reponse C</label>
  <input type="radio" name="radio" id="radio"> <label for="radio">Reponse D</label>
  </div>
</fieldset>
</form>
<form action="" method="get">
  <label for="GET-name">Question 3 ?</label>
  <input id="GET-name" type="number" name="name">
  <input type="submit" value="Enregistrer">
</form>
<fieldset>
<p>Question 4 ?</p>
<div>
  <input type="checkbox" id="rep1" name="rep1">
  <label for="rep1">Reponse A</label>
</div>

<div>
  <input type="checkbox" id="rep2" name="rep2">
  <label for="rep2">Reponse B</label>
</div>
<div>
  <input type="checkbox" id="rep3" name="rep3">
  <label for="rep3">Reponse C</label>
</div>
<div>
  <input type="checkbox" id="rep4" name="rep4">
  <label for="rep4">Reponse D</label>
</div>
<div>
  <input type="checkbox" id="rep5" name="rep5">
  <label for="rep5"> Reponse E</label>
</div>
<div>
  <input type="checkbox" id="rep6" name="rep6">
  <label for="rep6">Reponse F</label>
</div>
</fieldset>

<a href="answerquizz2.php" target="_blank"> <input type="button" value="Submit"> </a>

    </div>

    <?php include('footer.php') ?>

  </div>
    <footer>
        <div class="footer">
          <a href="homepage.php" class="botText">goback to homepage</a>
        </div>
    </footer>
  </body>
</html>
