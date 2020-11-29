<?php
$myID=$_SESSION['user_id'];
$num_quizz=intval($_GET['id']);
//var_dump($num_quizz);
$score = $bdd->query('SELECT * FROM score')->fetchAll();
//var_dump($score);


foreach ($score as $value) {
  if ($myID==$value['user_id']){
    if($value['quizz_id']==$num_quizz){
      echo("<br>Quizz numero : ".$value['quizz_id']);
      //echo("<br>");
      echo ("<br> Pour ce quizz mon résultat était de ".$value['score']);
    }
  }
}

?>
