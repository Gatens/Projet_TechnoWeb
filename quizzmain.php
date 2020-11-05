<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="css/main.css" />

  <head>
    <meta charset="utf-8">
    <title>Quizz</title>
  </head>
  <body>
  <div class='container'>
    <?php include('header.php'); ?>
    <?php
          include('database/connectToDB.php');
          include('displayQuizz.php');
          displayQuizz($_GET['id'],$bdd);
    ?>
    <?php include('footer.php'); ?>
  </div>
  </body>
</html>
