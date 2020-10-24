<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="main.css" />
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php include('header.php') ?>
    <div id='container'>
      <?php include('connect.php') ?>

      <div id="content">

        <p>Quizz de géographie :</p>

        <form action="" method="post">
          <fieldset class="question1">

            <?php $reponse = $bdd->query('SELECT question_title FROM question where question_id=1');

            while ($donnees = $reponse->fetch())
            {
                echo $donnees['question_title'] . '<br />';
            }

            $reponse->closeCursor();
 ?>

 <div class="Choix1">
   <input type="radio" name="radio" id="radio"> <label for="radio"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=1');

    while ($donnees = $reponse->fetch())
    {
        echo $donnees['answer_text'] . '<br />';
    }

    $reponse->closeCursor();
   ?></label>
   <input type="radio" name="radio" id="radio"> <label for="radio"><label for="radio"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=2');

    while ($donnees = $reponse->fetch())
    {
        echo $donnees['answer_text'] . '<br />';
    }

    $reponse->closeCursor();
   ?></label>
   <input type="radio" name="radio" id="radio"> <label for="radio"><label for="radio"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=3');

    while ($donnees = $reponse->fetch())
    {
        echo $donnees['answer_text'] . '<br />';
    }

    $reponse->closeCursor();
   ?></label>
   <input type="radio" name="radio" id="radio"> <label for="radio"><label for="radio"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=4');

    while ($donnees = $reponse->fetch())
    {
        echo $donnees['answer_text'] . '<br />';
    }

    $reponse->closeCursor();
   ?></label>
 </div>
</fieldset>
</form>
          </fieldset>
        </form>

  <form action="" method="post">
    <fieldset class="question1">
      <?php $reponse = $bdd->query('SELECT question_title FROM question where question_id=2');

      while ($donnees = $reponse->fetch())
      {
          echo $donnees['question_title'] . '<br />';
      }

      $reponse->closeCursor();
?>
      <div class="Choix1">
        <input type="radio" name="radio" id="radio"> <label for="radio"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=5');

         while ($donnees = $reponse->fetch())
         {
             echo $donnees['answer_text'] . '<br />';
         }

         $reponse->closeCursor();
        ?></label>
        <input type="radio" name="radio" id="radio"> <label for="radio"><label for="radio"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=6');

         while ($donnees = $reponse->fetch())
         {
             echo $donnees['answer_text'] . '<br />';
         }

         $reponse->closeCursor();
        ?></label>
        <input type="radio" name="radio" id="radio"> <label for="radio"><label for="radio"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=7');

         while ($donnees = $reponse->fetch())
         {
             echo $donnees['answer_text'] . '<br />';
         }

         $reponse->closeCursor();
        ?></label>
        <input type="radio" name="radio" id="radio"> <label for="radio"><label for="radio"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=8');

         while ($donnees = $reponse->fetch())
         {
             echo $donnees['answer_text'] . '<br />';
         }

         $reponse->closeCursor();
        ?></label>
      </div>
    </fieldset>
  </form>

<fieldset class="question1">

  <?php $reponse = $bdd->query('SELECT question_title FROM question where question_id=3');

  while ($donnees = $reponse->fetch())
  {
      echo $donnees['question_title'] . '<br />';
  }

  $reponse->closeCursor();
?>
  <div>
    <input type="checkbox" id="rep1" name="rep1">
    <label for="rep1"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=9');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
  </div>

  <div>
    <input type="checkbox" id="rep2" name="rep2">
    <label for="rep2"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=10');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
  </div>
  <div>
    <input type="checkbox" id="rep3" name="rep3">
    <label for="rep3"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=11');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
  </div>
  <div>
    <input type="checkbox" id="rep4" name="rep4">
    <label for="rep4"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=12');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
  </div>
  <div>
    <input type="checkbox" id="rep5" name="rep5">
    <label for="rep5"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=13');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
  </div>
  <div>
    <input type="checkbox" id="rep6" name="rep6">
    <label for="rep6"> <?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=14');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
  </div>
  </fieldset>

  <div class=question1>
<form action="" method="get">
  <?php $reponse = $bdd->query('SELECT question_title FROM question where question_id=4');

  while ($donnees = $reponse->fetch())
  {
      echo $donnees['question_title'] . '<br />';
  }

  $reponse->closeCursor();
?>
  <input id="GET-name" type="number" name="name">

  <input type="submit" value="Enregistrer">
</form>

<a href="answerquizz1.php" target="_blank"> <input type="button" value="Submit"> </a>

  </div>

    <?php include('footer.php') ?>
  </div>
  </body>
</html>
