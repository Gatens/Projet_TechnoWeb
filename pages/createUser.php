<?php

$db = $bdd->query('SELECT usermail,username FROM user;')->fetchAll(); // recuperation du mail et du username dans la bdd

function checkExist($db,$username,$usermail){
  $exist = 0;
    foreach ($db as $value){ // on parcours toute l'array
      if ($value['usermail']==$usermail){ // on verifie que l'email appartient a la database
        $exist = 1;
        $message='Cet email est deja enregistré sur notre site !';
        echo '<script type="text/javascript">window.alert("'.$message.'");
        window.location.href="index.php?page=register";
        </script>';
      }

      if ($value['username']==$username){
        $exist = 1;
        $message='Ce username est deja enregistré sur notre site!';
        echo '<script>alert("'.$message.'");
        window.location.href="index.php?page=register";
        </script>';
      }
    }
    if ($exist==0){
      return 0;
    }
    else{
      return 1;
    }
}

  if (isset($_POST["Envoie"])){
    $usermail =$_POST['email'];
    $userpass=$_POST['password'];
    $username=$_POST['username'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];

    $check = checkExist($db,$username,$usermail);

    if ($check==0){
    $userpass = password_hash($userpass,PASSWORD_DEFAULT);

    $create=$bdd->prepare('INSERT INTO user VALUES (NULL, :usermail,:userpass,:username,:name,:surname)');
    $create->bindParam(':usermail',$usermail);
    $create->bindParam(':userpass',$userpass);
    $create->bindParam(':username',$username);
    $create->bindParam(':name',$name);
    $create->bindParam(':surname',$surname);
    $create->execute();


    header('Location: index.php?page=account'); // redirige vers la page account
    }
}

?>
