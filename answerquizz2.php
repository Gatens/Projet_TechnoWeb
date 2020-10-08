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
      <p>Quizz</p>
  <form action="" method="post">
  <fieldset class="question1">
    <a class="titre">Quel footballeur à le plus de Ballon d'Or de l'histoire ?</a>
    <div class="Choix1">
    <input type="radio" name="radio" id="radio"> <label for="radio">Michel Platini</label>
    <input type="radio" name="radio" id="radio"> <label for="radio">Cristiano Ronaldo</label>
    <input type="radio" checked="checked" name="radio" id="radio"> <label for="radio">Lionel Messi</label>
    <input type="radio" name="radio" id="radio"> <label for="radio">Johan Cruyff</label>
    </div>
  </fieldset>
</form>
<form action="" method="post">
<fieldset class="question1">
  <a class="titre">Quelle est l'équipe à remporter le plus de coupe du monde de l'histoire ? </a>
  <div class="Choix1">
  <input type="radio" name="radio" id="radio"> <label for="radio">Allemagne</label>
  <input type="radio" checked="checked" name="radio" id="radio"> <label for="radio">Brésil</label>
  <input type="radio" name="radio" id="radio"> <label for="radio">Italie</label>
  <input type="radio" name="radio" id="radio"> <label for="radio">France</label>
  </div>
</fieldset>
</form>
<form action="" method="get">
  <label for="GET-name">Qui est le dernier jour à avoir remporté le Ballon d'Or ? </label>
  <input id="GET-name" type="number" name="name">
  <input type="submit" value="Enregistrer">
</form>
<fieldset>
<p>Quels joueurs ont marqué plus de 60 buts en une saison</p>
<div>
  <input type="checkbox" id="rep1" name="rep1" checked="checked">
  <label for="rep1">Gerd Muller</label>
</div>

<div>
  <input type="checkbox" id="rep2" name="rep2">
  <label for="rep2">Zinedine Zidane</label>
</div>
<div>
  <input type="checkbox" id="rep3" name="rep3" checked="checked">
  <label for="rep3">Pelé</label>
</div>
<div>
  <input type="checkbox" id="rep4" name="rep4">
  <label for="rep4">Diego Maradona</label>
</div>
<div>
  <input type="checkbox" id="rep5" name="rep5">
  <label for="rep5">Lewandowski</label>
</div>
<div>
  <input type="checkbox" id="rep6" name="rep6">
  <label for="rep6">Harry Kane</label>
</div>
</fieldset>


    </div>

    <?php include('footer.php') ?>

  </div>
  </body>
</html>
