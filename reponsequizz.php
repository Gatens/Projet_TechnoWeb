<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="main.css">

  <head>
    <meta charset="utf-8">
    <title>Quizz</title>
  </head>
  <body>
  <div class='container'>
    <?php include('header.php'); ?>
         <?php
          include('connect.php');
          include('afficherrep.php');
          afficherrep($_GET['id'],$bdd);
          ?>
    <?php include('footer.php'); ?>
  </div>
  </body>
</html>
