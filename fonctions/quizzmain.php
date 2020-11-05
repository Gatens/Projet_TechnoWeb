<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="css/main.css" />

  <head>
    <meta charset="utf-8">
    <title>Quizz</title>
  </head>
  <body>
  <div class='container'>
    <?php
          displayQuizz($_GET['id'],$bdd);
    ?>
  </div>
  </body>
</html>
