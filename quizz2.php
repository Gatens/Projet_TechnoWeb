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
    <?php include('connect.php') ?>
    <div id="content">
      <p>Quizz de football : </p>
  <form action="" method="post">
  <fieldset class="question1">
    <?php $reponse = $bdd->query('SELECT question_title FROM question where question_id=5');

    while ($donnees = $reponse->fetch())
    {
        echo $donnees['question_title'] . '<br />';
    }

    $reponse->closeCursor();
?>
    <div class="Choix1">
    <input type="radio" name="radio" id="radio"> <label for="radio">Michel Platini</label>
    <input type="radio" name="radio" id="radio"> <label for="radio">Cristiano Ronaldo</label>
    <input type="radio" name="radio" id="radio"> <label for="radio">Lionel Messi</label>
    <input type="radio" name="radio" id="radio"> <label for="radio">Johan Cruyff</label>
    </div>
  </fieldset>
</form>
<form action="" method="post">
<fieldset class="question1">
  <?php $reponse = $bdd->query('SELECT question_title FROM question where question_id=6');

  while ($donnees = $reponse->fetch())
  {
      echo $donnees['question_title'] . '<br />';
  }

  $reponse->closeCursor();
?>
  <div class="Choix1">
  <input type="radio" name="radio" id="radio"> <label for="radio">Allemagne</label>
  <input type="radio" name="radio" id="radio"> <label for="radio">Brésil</label>
  <input type="radio" name="radio" id="radio"> <label for="radio">Italie</label>
  <input type="radio" name="radio" id="radio"> <label for="radio">France</label>
  </div>
</fieldset>
</form>
<div class="question1">
<form action="" method="get">
  <?php $reponse = $bdd->query('SELECT question_title FROM question where question_id=7');

  while ($donnees = $reponse->fetch())
  {
      echo $donnees['question_title'] . '<br />';
  }

  $reponse->closeCursor();
?>
  <input id="GET-name" type="number" name="name">
  <input type="submit" value="Enregistrer">
</form>
</div>
<fieldset class="question1">
  <?php $reponse = $bdd->query('SELECT question_title FROM question where question_id=8');

  while ($donnees = $reponse->fetch())
  {
      echo $donnees['question_title'] . '<br />';
  }

  $reponse->closeCursor();
?>
<div>
  <input type="checkbox" id="rep1" name="rep1">
  <label for="rep1">Gerd Muller</label>
</div>

<div>
  <input type="checkbox" id="rep2" name="rep2">
  <label for="rep2">Zinédine Zidane</label>
</div>
<div>
  <input type="checkbox" id="rep3" name="rep3">
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
  <a href="answerquizz2.php" target="_blank"> <input type="button" value="Submit"> </a>
</fieldset>



    </div>

    <?php include('footer.php') ?>

  </div>
  </body>
</html>
