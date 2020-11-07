<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="css/main.css" />
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <div id="textheader">
        <p class="textheader"> Bonjour et Bienvenue sur notre site !</p>
        <p class="textheader">Vous pouvez vous entrainer sur nos quizz !</p>
      </div>
      <div id="boutonLogin">
        <form method="post" action ="index.php?page=account">
          <button class="buttonLogin" name="Login/register">Account</button>
        </form>
      </div>



    <div class="bouton">
      <?php

          		$quizz = $bdd->query('SELECT quizz_id FROM quizz')->fetchAll();
          		foreach ($quizz as $key => $quizz_Id) {
          			echo('<a class="bouton1" href="index.php?page=quizz&id='.$quizz_Id['quizz_id'].'">Quizz '.$quizz_Id['quizz_id'].'</a>');
          		}
            ?>
    </div>
  </header>
  </body>
</html>
