<?php

    $user = 'root';



    $objetPdo = new PDO ('mysqli:host=localhost;dbname=php', $user);
    $pdoStat = $objetPdo->prepare('SELECT * FROM question');

    $execute = $pdoStat->execute();
       
    $question = $pdoStat->fetchAll();

    var_dump($question);
  
?>