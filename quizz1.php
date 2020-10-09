<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="main.css" />
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id='container'>
      <?php include('header.php') ?>
      <div id="content">
        <p>Quizz de géographie :</p>
        <form action="" method="post">
          <fieldset class="question1">
            <a class="titre"> Quelle est la capitale du Canada ?</a>
            <div class="Choix1">
              <input type="radio" name="radio" id="radio"> <label for="radio">Vancouver</label>
              <input type="radio" name="radio" id="radio"> <label for="radio">Montréal</label>
              <input type="radio" name="radio" id="radio"> <label for="radio">Ottawa</label>
              <input type="radio" name="radio" id="radio"> <label for="radio">Québec</label>
            </div>
          </fieldset>
        </form>
  <form action="" method="post">
    <fieldset class="question1">
      <a class="titre">Quel pays ne fait pas partie de l'Amérique du Sud ?</a>
      <div class="Choix1">
        <input type="radio" name="radio" id="radio"> <label for="radio">Bolivie</label>
        <input type="radio" name="radio" id="radio"> <label for="radio">Nicaragua</label>
        <input type="radio" name="radio" id="radio"> <label for="radio">Urugay</label>
        <input type="radio" name="radio" id="radio"> <label for="radio">Venezuela</label>
      </div>
    </fieldset>
  </form>
<fieldset class="question1">

  <p>Quels pays sont dans l'Union Européenne ?</p>
  <div>
    <input type="checkbox" id="rep1" name="rep1">
    <label for="rep1">Serbie</label>
  </div>

  <div>
    <input type="checkbox" id="rep2" name="rep2">
    <label for="rep2">Estonie</label>
  </div>
  <div>
    <input type="checkbox" id="rep3" name="rep3">
    <label for="rep3">Lettonie</label>
  </div>
  <div>
    <input type="checkbox" id="rep4" name="rep4">
    <label for="rep4">Turquie</label>
  </div>
  <div>
    <input type="checkbox" id="rep5" name="rep5">
    <label for="rep5">Norvège</label>
  </div>
  <div>
    <input type="checkbox" id="rep6" name="rep6">
    <label for="rep6">Slovénie</label>
  </div>
  </fieldset>
  <div class=question1>
<form action="" method="get">
  <label for="GET-name">Combien y a-t'il d'étoiles sur le drapeau américain ?</label>
  <input id="GET-name" type="number" name="name">
  <input type="submit" value="Enregistrer">
</form>
<a href="answerquizz1.php" target="_blank"> <input type="button" value="Submit"> </a>

  </div>

    <?php include('footer.php') ?>

  </div>

  </body>
</html>
