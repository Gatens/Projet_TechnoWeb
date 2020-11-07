<?php
//var_dump($_POST);

if (isset($_POST["Connexion"])){
  $email =$_POST['email'];
  $pass=$_POST['pass'];
  //echo $email;
  //echo $pass;
  // verif reussi
  $user = $bdd->query('SELECT usermail,password FROM user;')->fetchAll(); // recuperation du mail et du password dans la bdd
  //var_dump ($user);

  /*var_dump($user);
  foreach ($user as $value) {
    // code...
    echo $value['email'].'<br/>';
    echo $value['password'].'<br/>';

  }
*/
  function checkUser($db, $userMail, $userPass){
    foreach ($db as $value){ // on parcours toute l'array
      if ($value['usermail']==$userMail){ // on verifie que l'email appartient a la database
        //echo $value['password'];
        if (password_verify($userPass,$value['password'])){ // on verifie que le password corresponf a cet adresse mail
          echo "connexion effectue <br/>";
        }
        else {
          echo "mauvais mot de passe <br/>";
        }
      }
    }
  }
  checkUser($user,$email,$pass);
}

 ?>
