<div id="account">
  <h1>
      Connectez-vous
  </h1>
  <form method="post" action="index.php?page=login">
    <p>
      <label for="id">email</label> : <input type="text" name="email" placeholder="Entrer identifiant" id="id" required />
      <label for="psw">password</label> : <input type="password" name="pass" placeholder="*******" id="psw" required />

      <button type="submit" name="Connexion">Connexion</button>
    </p>
  </form>
  
  <form method="post" action="index.php?page=register">
    <h1> S'enregistrer ? </h1>
    <button type="submit" name="Register">Register</button>
  </form>
</div>
