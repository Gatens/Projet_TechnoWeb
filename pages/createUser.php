<?php
//include('header.php');
//var_dump($_POST);

if (isset($_POST["Envoie"])){
  $usermail =$_POST['email'];
  $userpass=$_POST['password'];
  $username=$_POST['username'];
  $name=$_POST['name'];
  $surname=$_POST['surname'];


  $userpass = password_hash($userpass,PASSWORD_DEFAULT);

  $create=$bdd->prepare('INSERT INTO user VALUES (NULL, :usermail,:userpass,:username,:name,:surname)');
  $create->bindParam(':usermail',$usermail);
  $create->bindParam(':userpass',$userpass);
  $create->bindParam(':username',$username);
  $create->bindParam(':name',$name);
  $create->bindParam(':surname',$surname);
  $create->execute();

}
 ?>
