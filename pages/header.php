<header>

  <div id="textheader">
    <p class="textheader"> Bonjour et Bienvenue sur notre site !</p>
    <p class="textheader">Vous pouvez vous entrainer sur nos quizz !</p>
  </div>

<div class="regroupe">

  <div class="classement">
    <a href="index.php?page=classement">Classement</a>
  </div>

  <div class="quizz">

    <a class="deroulant">Quizz</a>

    <div class="bouton">
      <?php
        $quizz = $bdd->query('SELECT quizz_id FROM quizz')->fetchAll();
        foreach ($quizz as $key => $quizz_Id)
        {
          echo('<a class="bouton1" href="index.php?page=choix&id='.$quizz_Id['quizz_id'].'">Quizz '.$quizz_Id['quizz_id'].'</a>');
        }
        ?>
    </div>
  </div>

  <div id="boutonLogin">
      <?php
      if(isset($_SESSION['connect']))
      {
      ?><form method="post" action="index.php?page=login">
          <button type="submit" class="buttonLogin" name="LogOut">Log Out</button>
        </form><?php
      }
      else
      {
        ?>
        <form method="post" action ="index.php?page=account">
          <button class="buttonLogin" name="Login/register">Log In</button><?php
      }
      ?>
    </form>
  </div>


</div>
</header>
