<?php

if(isset($_POST['Register'])){?>
  <form method="post" action="index.php?page=createUser">
    <label for="email">email</label> : <input type="text" name="email" placeholder="entrer votre email" id="email" required />
    <label for="password">password</label> : <input type="password" name="password" placeholder="entrer votre password" id="password" required />
    <label for="username">username</label> : <input type="text" name="username" placeholder="entrer un username" id="username" required />
    <label for="name">name</label> : <input type="text" name="name" placeholder="your name" id="name" required />
    <label for="surname">surname</label> : <input type="text" name="surname" placeholder="tour surname" id="surname" required />

    <input type="submit" name="Envoie" href="index.php?page=homepage">

  </form>
  <?php
}

 ?>
