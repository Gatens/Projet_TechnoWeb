  <?php
      $quizz = $bdd->query('SELECT quizz_name FROM quizz;')->fetchAll();
      echo('<div id="titrePage"><a id= "titre">Quizz '.$quizz[$_GET['id']-1]['quizz_name'].'</a></div>'); //Print quizz title from db
    ?>

    <div class="choix">

      <form action="index.php?page=quizz&id=<?php echo($_GET['id']);?>" method="post">
        <input class="boutonchoix" type="submit" name="fairequizz" value="Faire le Quizz" />
      </form>
      <form action="index.php?page=answer&id=<?php echo($_GET['id']);?>" method="post">
        <input class="boutonchoix" type="submit" name="resultats" value="Afficher mes résultats" />

      </form>
        <form action="index.php?page=choix&id=<?php echo($_GET['id']);?>" method="post">
      <input class="boutonchoix" type="submit" name="resultats" value="Supprimer mes résultats" />
    <!--
     if{il clique sur le bouton supprimer mes resultats}
      {
        DELETE score_id,score WHERE quizz_id=le numero du quizzz AND user_id= l'id du gars;
        echo('Vos résultats ont été supprimé')
      }
-->

    </div>
