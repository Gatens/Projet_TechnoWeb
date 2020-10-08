<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="main.css" />
  <head>
    <meta charset="utf-8">
    <title>Account</title>
  </head>

  <body>
 <?php include('header.php')?>
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

          <div class="register">
              <a href="register.php" class="registerbutton">Register/S'enregistrer</a><br>
        </div>
  <?php include('footer.php')?>

  </body>


</html>
