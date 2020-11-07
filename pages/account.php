<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" type="text/css" href="css/main.css" />
  <head>
    <meta charset="utf-8">
    <title>Account</title>
  </head>

  <body>
  	<div id="account">

            <h1>
                Connectez-vous
            </h1>

            <form method="post" action="index.php?page=login">
                <p>
                    <label for="id">email</label> : <input type="text" name="email" placeholder="Entrer identifiant" id="id" required />

                    <label for="psw">password</label> : <input type="password" name="pass" placeholder="*******" id="psw" required />

                    <input type="submit" name="Envoyer">

                </p>
            </form>
          </br>
          </br>
          <form method="post" action="index.php?page=register">
            <h1> S'enregistrer ? </h1>
            <button type="submit" name="Register">Register</button>
          </form>

  </body>

</html>
