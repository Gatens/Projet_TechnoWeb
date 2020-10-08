<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="register.css" />
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="action_page.php">
      <div class="container5">
        <h1>Register/S'enregistrer</h1>
        <p>Inscrivez vous.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Entrer Email" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Entrer mot de passe" name="pswd" id="pswd" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Répèter mot de passe" name="pswd-repeat" id="pswd-repeat" required>
        <hr>

        <button type="submit" class="registerbutton2">Register/S'enregistrer</button>
      </div>

      <div class="container signin">
        <p>Déjà un compte ? <a href="account.php">Se connecter</a>.</p>
      </div>

    </form>
  </body>
</html>
