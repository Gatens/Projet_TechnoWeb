<?php
		function compare($question_id,$answerArray,$bdd)// fonction qui compare les réponses avec la bdd
		{
  		$answer = $bdd->query('SELECT answer_id,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$question_id)->fetchAll();

			$question = $bdd->query('SELECT question_input_type FROM question WHERE question_id ='.$question_id)->fetchAll();

  		$good_answers=0;

  		foreach ($answer as $test)
			{
    		if ($test['is_valid_answer'])
				 {
        		$good_answers=$good_answers+1; // ajoute au compteur de bonne réponse
    		 }
  		}

  		$counter=0;
  		foreach($answer as $test2) // ajoute au compteur de réponses
			{
    		if(in_array($test2['answer_id'],$answerArray)&&($test2['is_valid_answer']))
				{
      		$counter=$counter+1;
    		}
  		}
  		if($counter==$good_answers) // affiche bonne ou mauvaise réponse en fonction de l'égalité des compteurs
			{
    		return ' Réponse Correcte'; //bug pour sélection et input
  		}
			else
			{
    		return ' Réponse incorrecte';
  		}
		}



	function displayAnswer($id_quizz,$bdd)// affiche les réponses en html en fonction de leur type et en les comparant avec la database
	{

            $quizz = $bdd->query('SELECT quizz_name FROM quizz;')->fetchAll(); // affiche le nom du quizz
            echo('<div id="content"><div id="titrePage"><h2>Quizz '.$quizz[$id_quizz-1]['quizz_name'].'</h2></div>');

						// affiche les questions

            $question = $bdd->query('SELECT question_id, question_title,question_input_type,question_quizz_id FROM question WHERE question.question_quizz_id = '.$id_quizz)->fetchAll();
						// on fait une requete pour la question dans la bdd
					  $question_number=0; // numéro de la question
							// on fait une requete pour la reponse dans la bdd
  					$answer = $bdd->query('SELECT answer_id,answer_text,is_valid_answer, answer_question_id FROM answer;')->fetchAll();


            foreach ($question as $key=>$type)
						{
              $question_number=$question_number+1;

							/*_________________________________SELECTION_______________________________________*/

              if($type['question_input_type']=='selection')
							{
                echo("<div id='question1".$question_number."_quizz1' class='question1'>");
								// affiche le numéro de la question
                echo("<p class='question1'>Question ".$question_number." : ".$type['question_title']."".compare($type['question_id'],$_POST,$bdd)."</p>");
								// affiche  la question
                echo(" <select  name='Question".$question_number."Quizz".$type['question_quizz_id']."' form='selection'>");
									// on fait une requete pour la reponse dans la bdd
								$answer = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$type['question_id'])->fetchAll();

                foreach ($answer as $key2 => $proposition) // vérifie que la réponse est correcte
								 {
                    if ($proposition['is_valid_answer'] == 1)
										{
                      echo('<option value="true">'.$proposition['answer_text'].'</option>'); // affiche le résultat
                    }
                }

                echo("</select>");
                echo("</div>");
              }

							/*_________________________________CHECKBOX_______________________________________*/

              if($type['question_input_type']=='checkbox')
							{
                echo("<div id='question1".$question_number."_quizz1' class='question1'>");
								echo("<p class='question1'>Question ".$question_number." : ".$type['question_title']."".compare($type['question_id'],$_POST,$bdd)."</p>");

                $answer = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$type['question_id'])->fetchAll();
									// on fait une requete pour la reponse dans la bdd
								$answer_counter=0;

                foreach ($answer as $key2 => $proposition)
								 {
                    $answer_counter=$answer_counter+1;
                    if ($proposition['is_valid_answer'] == 1)
										{

                            echo("<div> <input type='checkbox' checked id='rep".$answer_counter."' name='rep".$answer_counter."'> <label for='rep'>".$proposition['answer_text']."</label></div>");

                    }
                }

                echo('</div>');
                $answer_counter=0;
              }

							/*_________________________________INPUT_______________________________________*/

              if($type['question_input_type']=='input')
							{
                $answer = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$type['question_id'])->fetchAll();
									// on fait une requete pour la reponse dans la bdd
                echo("<div id='question1".$question_number."_quizz1' class='question1'>");
                echo("<p class='question1'>Question ".$question_number." : ".$type['question_title']."".compare($type['question_id'],$_POST,$bdd)."</p>");

                foreach ($answer as $key2 => $proposition)
								{
                    echo('<input id="GET-name" value="'.$proposition['answer_text'].'" type="text" name="name">');
                }
                echo('</div>');
              }

								/*_________________________________RADIO_______________________________________*/

              if($type['question_input_type']=='radio')
							{
                echo("<div id='question1".$question_number."_quizz1' class='question1'>");
                echo("<p class='question1'>Question ".$question_number." : ".$type['question_title']."".compare($type['question_id'],$_POST,$bdd)."</p>");

                $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$type['question_id'])->fetchAll();
									// on fait une requete pour la reponse dans la bdd
                foreach ($response as $key2 => $proposition)
								{
                    if ($proposition['is_valid_answer'] == 1)
										{
                    echo('<input type="radio" checked name="radio" class="radio"> <label for="radio">'.$proposition['answer_text'].'</label> <br/>');
                    }
                }

                echo('</div>');
              }
            }
						// on submit et on renvoie à la home page
            echo('<div class="boutonSubmit"><a href="index.php?page=home"> <input type="submit" value="Accueil"class="buttonSubmit"></a></div>');
            echo("</div>");
            echo("</div>");
}


 ?>
