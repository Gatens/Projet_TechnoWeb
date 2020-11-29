<?php

$user=$bdd->query('SELECT user_id,score ,quizz_id FROM score ORDER BY quizz_id AND score DESC')-> fetchall();
foreach ($user as $value) {
    $pseudo=$bdd->query('SELECT username FROM user WHERE id='.$value['user_id'])->fetchAll();
    if($value['quizz_id']==1){
      echo("QUIZZ 1 : <br>");
      foreach ($pseudo as $username) {
        echo($username['username']. " : ");
        echo($value['score']."<br>");
      }
    }
    if($value['quizz_id']==2){
      echo("QUIZZ 2 : <br>");
      foreach ($pseudo as $username) {
        echo($username['username']. " : ");
        echo($value['score']."<br>");
      }
    }
}

?>
