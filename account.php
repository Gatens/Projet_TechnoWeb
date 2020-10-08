<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="main.css" />
  <head>
    <meta charset="utf-8">
    <title>Account</title>
  </head>

  <body>

  	<div id="account">

            <h1>
                Connectez-vous
            </h1>

            <form method="post">
                <p>
                    <label for="nom">Name</label> : <input type="text" name="name" placeholder="Ex: La B" id="name" required />
                    <label for="surname">Surname</label> : <input type="text" name="surname" placeholder="Ex: Thomas" id="surname" required />
                    <input type="submit" name="OK">
                </p>
            </form>

        </div>



        <footer>
            <div class="footer">
              <a href="homepage.php" class="botText">goback to homepage</a>
            </div>
        </footer>


  </body>


</html>


<?php
$bonjour='bonjour ';
$name=$_POST['name'];
$surname=$_POST['surname'];
echo $bonjour.$surname
 ?>
