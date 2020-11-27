<?php

if (isset($_POST["Connexion"])){
  $email =$_POST['email'];
  $pass=$_POST['pass'];
  $user = $bdd->query('SELECT id,usermail,password FROM user;')->fetchAll(); // recuperation du mail et du password dans la bdd

  function checkUser($db, $userMail, $userPass){
    $find=0;
    foreach ($db as $value){ // on parcours toute l'array
      if ($value['usermail']==$userMail){ // on verifie que l'email appartient a la database
        $find=1;
        if (password_verify($userPass,$value['password'])){ // on verifie que le password corresponf a cet adresse mail
          $_SESSION["connect"]="connecte";
          $id = $value['id'];
          $_SESSION["user_id"]=$id;
          header('Location: ./index.php');
          exit();
        }
        else {
          echo "<br> Mauvais mot de passe </br>";
        }
      }
    }
    if ($find==0){
      echo "<br> aucun utilisateur de ce nom </br>";
    }
  }
  checkUser($user,$email,$pass);
}


if (isset($_POST["LogOut"])){
  $_SESSION=array();
  header('Location: ./index.php');
  exit();
}
 ?>
