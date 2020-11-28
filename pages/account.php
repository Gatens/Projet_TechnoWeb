<div class="formulaire">
  <p class="espace1"> Page de connexion. </p>
  <form class="connexion" method="post" action="index.php?page=login">
      <label for="id">Adresse mail :</label> <input type="text" name="email" placeholder="Entrez votre adresse mail" id="id" required />
      <label for="psw">Mot de passe :</label> <input type="password" name="pass" placeholder="*****" id="psw" required />
      <button class="autre" type="submit" name="Connexion">Connexion</button>
  </form>
</div>

<div class="formulaire">
<form method="post" action="index.php?page=register">
  <p class="espace2"> Vous n'avez pas de compte ? Cliquez ici pour vous inscrire. </p>
  <button class="autre" type="submit" name="Register">Register</button>
</form>
</div>
