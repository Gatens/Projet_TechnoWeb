  <?php
      $quizz = $bdd->query('SELECT quizz_name FROM quizz;')->fetchAll();
      echo('<div id="titrePage"><a id= "titre">Quizz '.$quizz[$_GET['id']-1]['quizz_name'].'</a></div>'); //Print quizz title from db
    ?>

    <div class="choix">

      <form action="index.php?page=quizz&id=<?php echo($_GET['id']);?>" method="post">
        <input class="boutonchoix" type="submit" name="fairequizz" value="Faire le Quizz" />
      </form>
      <form action="index.php?page=resultatsUser&id=<?php echo($_GET['id']);?>" method="post">
        <input class="boutonchoix" type="submit" name="resultats" value="Afficher mes résultats" />
      </form>
      <form action="index.php?page=choix&id=<?php echo($_GET['id']);?>" method="post">
        <input class="boutonchoix" type="submit" name="suppresion" value="Supprimer mes résultats" />
      </form>

    </div>
<?php
      if(isset($_POST['suppresion'])){
        $supp=$bdd->query('DELETE FROM score WHERE score.user_id='.$_SESSION['user_id'].' AND  score.quizz_id='.$_GET['id'])->fetchAll();
        $message='Vos résultats ont bien été supprimés !';
        echo '<script type="text/javascript">window.alert("'.$message.'");
        window.location.href="index.php?page=home;"
        </script>';
      }
?>
