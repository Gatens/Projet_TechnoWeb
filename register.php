<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="css/register.css" />
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="action_page.php">
      <div class="intro">
        <h1>Register/S'enregistrer</h1>
        <p>Inscrivez vous.</p>

     </div>

     <div class="formulaire">

        <label for="id"><b>Identifiant</b></label>
        <input type="text" placeholder="Entrer identifiant" name="id" id="id" class="blank" required>

        <label for="lastname"><b>Nom</b></label>
        <input type="text" placeholder="Entrer nom" name="lastname" id="lastname" class="blank" required>

        <label for="firstname"><b>Prénom</b></label>
        <input type="text" placeholder="Entrer prénom" name="firstname" id="firstname" class="blank" required>

        <label for="adress"><b>Adresse</b></label>
        <input type="text" placeholder="Entrer adresse" name="adress" id="adress" class="blank" required>

        <label for="phone"><b>Téléphone</b></label>
        <input type="text" placeholder="Entrer téléphone" name="phone" id="phone" class="blank" required>

        <label for="birthdate"><b>Date de naissance</b></label>
        <input type="text" placeholder="Entrer date de naissance" name="birthdate" id="birthdate" class="blank" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Entrer Email" name="email" id="email" class="blank" required >

        <label for="psw"><b>Mot de passe</b></label>
        <input type="Mot de passe" placeholder="Entrer mot de passe" name="pswd" id="pswd" class="blank" required>

        <label for="psw-repeat"><b>Répèter mot de passe</b></label>
        <input type="password" placeholder="Répèter mot de passe" name="pswd-repeat" id="pswd-repeat" class="blank" required>

        <button type="submit" class="registerbutton2 blank ">Register/S'enregistrer</button>
    </div>

      <div class="signin">
        <p>Déjà un compte ? <a href="account.php" class="lien">Se connecter</a>.</p>
      </div>
    </form>
    <?php include('footer.php')?>
  </body>
</html>
