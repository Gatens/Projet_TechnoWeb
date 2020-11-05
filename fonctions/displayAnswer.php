<?php
		function compare($question_id,$answerArray,$bdd){    // fonction qui compare les réponses avec la bdd
  		$response = $bdd->query('SELECT answer_id,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$question_id)->fetchAll();
  		$question = $bdd->query('SELECT question_input_type FROM question WHERE question_id ='.$question_id)->fetchAll();
  		$compGoodAns=0;
  		foreach ($response as $value1) {
    		if ($value1['is_valid_answer']) {
        		$compGoodAns=$compGoodAns+1; // ajoute au compteur de bonne réponse
    		}
  		}

  		$comp=0;
  		foreach($response as $value){   // ajoute au compteur de réponses
    		if( in_array($value['answer_id'],$answerArray)&&($value['is_valid_answer'])){
      		$comp=$comp+1;
    		}
  		}
  		if($comp==$compGoodAns){   // affiche bonne ou mauvaise réponse en fonction de l'égalité des compteurs
    		return ' Réponse Correcte';
  		}else{
    		return ' Mauvaise Réponse';
  		}
		}

	function displayAnswer($quizzId,$bdd){ // affiche les réponses en html en fonction de leur type et en les comparant avec la database

            $quizz = $bdd->query('SELECT quizz_name FROM quizz;')->fetchAll(); // affiche le nom du quizz
            echo('<div id="content"><div id="titrePage"><h2>Quizz '.$quizz[$quizzId-1]['quizz_name'].'</h2></div>');

						// affiche les questions

            $question = $bdd->query('SELECT question_id, question_title,question_input_type,question_quizz_id FROM question WHERE question.question_quizz_id = '.$quizzId)->fetchAll();
            $comp=0; // numéro de la question

            foreach ($question as $key=>$line){
              $comp=$comp+1;

							// Type selection

              if($line['question_input_type']=='selection'){
                echo("<div id='question1".$comp."_quizz1' class='question1'>");

                echo("<p class='question1'>Question ".$comp." : ".$line['question_title']."".compare($line['question_id'],$_POST,$bdd)."</p>");

                echo(" <select  name='Question".$comp."Quizz".$line['question_quizz_id']."' form='selection'>");




                $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$line['question_id'])->fetchAll();



                foreach ($response as $key2 => $answer) {  // vérifie que la réponse est correcte
                    if ($answer['is_valid_answer'] == 1){
                      echo('<option value="true">'.$answer['answer_text'].'</option>'); // affiche le résultat
                    }
                }

                echo("</select>");
                echo("</div>");
              }

								// Type chechbox

              if($line['question_input_type']=='checkbox'){
                echo("<div id='question1".$comp."_quizz1' class='question1'>");
                echo("<p class='question1'>Question ".$comp." : ".$line['question_title']."".compare($line['question_id'],$_POST,$bdd)."</p>");
                $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$line['question_id'])->fetchAll();
                $compans=0;

                foreach ($response as $key2 => $answer) {
                    $compans=$compans+1;
                    if ($answer['is_valid_answer'] == 1){

                            echo("<div> <input type='checkbox' checked id='rep".$compans."1q1' name='rep".$compans."'> <label for='rep1q1'>".$answer['answer_text']."</label></div>");

                    }
                }

                echo('</div>');
                $compans=0;
              }

								// Type input

              if($line['question_input_type']=='input'){
                $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$line['question_id'])->fetchAll();

                echo("<div id='question1".$comp."_quizz1' class='question1'>");
                echo("<p class='question1'>Question ".$comp." : ".$line['question_title']."".compare($line['question_id'],$_POST,$bdd)."</p>");
                foreach ($response as $key2 => $answer) {
                    echo('<input id="GET-name" value="'.$answer['answer_text'].'" type="text" name="name">');
                }
                echo('</div>');
              }

								// Type radio

              if($line['question_input_type']=='radio'){
                echo("<div id='question1".$comp."_quizz1' class='question1'>");
                echo("<p class='question1'>Question ".$comp." : ".$line['question_title']."".compare($line['question_id'],$_POST,$bdd)."</p>");
                $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$line['question_id'])->fetchAll();

                foreach ($response as $key2 => $answer) {
                    if ($answer['is_valid_answer'] == 1){
                    echo('<input type="radio" checked name="radio" class="radio"> <label for="radio">'.$answer['answer_text'].'</label> <br/>');
                    }
                }

                echo('</div>');
              }
            }
            echo('<div class="boutonSubmit"><a href="index.php?page=home"> <input type="submit" value="Accueil"class="buttonSubmit"></a></div>');
            echo("</div>");
            echo("</div>");
}


 ?>
