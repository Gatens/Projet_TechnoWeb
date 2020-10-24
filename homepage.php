<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="main.css" />

  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
  </head>

  <body>
    <?php
      $user = 'root';
      $db = new PDO ('mysql:host=localhost;dbname=php', $user);
     ?>
    <?php include('header.php') ?>

        <div id="imageQuizz">

        <img class="imageQuizz" src="quizz.png">
        </div>


      <?php include('footer.php') ?>

      



  </body>

</html>
