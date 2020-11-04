<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="css/main.css">

  <head>
    <meta charset="utf-8">
    <title>Quizz</title>
  </head>
  <body>
  <div class='container'>
    <?php include('header.php'); ?>
         <?php
          include('connectToDB.php');
          include('displayAnswer.php');
          displayAnswer($_GET['id'],$bdd);
          ?>
    <?php include('footer.php'); ?>
  </div>
  </body>
</html>
