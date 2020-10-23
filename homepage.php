<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="main.css" />

  <head>
    <meta charset="utf-8">
    <title>HomePage</title>
  </head>

  <body>
    <?php include('header.php') ?>

        <div id="imageQuizz">

        <img class="imageQuizz" src="quizz.png">
        </div>


      <?php include('footer.php') ?>

        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
          

        ?>

       
        
  </body>

</html>
