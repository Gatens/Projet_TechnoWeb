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
    <input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=19');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
    <input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=20');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
    <input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=21');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
    <input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=22');

     while ($donnees = $reponse->fetch())
     {
         echo $donnees['answer_text'] . '<br />';
     }

     $reponse->closeCursor();
    ?></label>
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
  <input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=23');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
  <input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=24');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
  <input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=25');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
  <input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=26');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
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
<input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=27');

 while ($donnees = $reponse->fetch())
 {
     echo $donnees['answer_text'] . '<br />';
 }

 $reponse->closeCursor();
?></label>
<input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=28');

 while ($donnees = $reponse->fetch())
 {
     echo $donnees['answer_text'] . '<br />';
 }

 $reponse->closeCursor();
?></label>
<input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=29');

 while ($donnees = $reponse->fetch())
 {
     echo $donnees['answer_text'] . '<br />';
 }

 $reponse->closeCursor();
?></label>
<input type="radio" name="radio" id="radio"> <label for="radio"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=30');

 while ($donnees = $reponse->fetch())
 {
     echo $donnees['answer_text'] . '<br />';
 }

 $reponse->closeCursor();
?></label>
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
  <label for="rep1"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=31');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
</div>

<div>
  <input type="checkbox" id="rep2" name="rep2">
  <label for="rep2"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=32');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
</div>
<div>
  <input type="checkbox" id="rep3" name="rep3">
  <label for="rep3"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=33');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
</div>
<div>
  <input type="checkbox" id="rep4" name="rep4">
  <label for="rep4"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=34');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
</div>
<div>
  <input type="checkbox" id="rep5" name="rep5">
  <label for="rep5"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=35');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
</div>
<div>
  <input type="checkbox" id="rep6" name="rep6">
  <label for="rep6"><?php $reponse = $bdd->query('SELECT answer_text FROM answer where answer_id=36');

   while ($donnees = $reponse->fetch())
   {
       echo $donnees['answer_text'] . '<br />';
   }

   $reponse->closeCursor();
  ?></label>
</div>
  <a href="answerquizz2.php" target="_blank"> <input type="button" value="Submit"> </a>
</fieldset>



    </div>

    <?php include('footer.php') ?>

  </div>
  </body>
</html>
