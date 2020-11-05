<?php

	include('connectToDB.php');

	function displayQuizz($ID_quizz,$bdd){  /*fonction qui affiche le quizz correspondant à son ID*/

    function quizzName ($ID_quizz,$compteur,$value,$goodQuestion,$bdd){

      echo("<div id='question ".$compteur."_quizz".$ID_quizz."' class='questionQuizz ".$goodQuestion."'>");
      echo("<p class='question1'>Question ".$compteur." : ".$value['question_title']."</p>");
    }


    $quizz = $bdd->query('SELECT quizz_name FROM quizz;')->fetchAll();  // select le nom du quizz

    echo('<div id="content"><div id="titrePage"><h1>Quizz '.$quizz[$ID_quizz-1]['quizz_name'].'</h1></div>');  // affiche le nom du quizz
    echo('<form action="answerQuizzMain.php?id='.$ID_quizz.'" method="post"><div id="questionContent">');

		// selectionne les questions correspondant à l'ID du quizz

    $question = $bdd->query('SELECT question_id, question_title,question_input_type,question_quizz_id FROM question WHERE question.question_quizz_id = '.$ID_quizz)->fetchAll();
    $compteur=0; //numéro de la question //

    foreach ($question as $key=>$value){
      $compteur=$compteur+1;

      $questionExacte="q".$compteur."f".$ID_quizz."";

      // Pour chaque Input Type

			//Type selection//

      if($value['question_input_type']=='selection'){


        quizzName ($ID_quizz,$compteur,$value,$questionExacte,$bdd);

        echo(" <select  name='Question".$compteur."Quizz".$value['question_quizz_id']."' class='selection' form='selection'>");

        $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$value['question_id'])->fetchAll();

        foreach ($response as $key2 => $answer) {
          echo('<option value=' .$answer['answer_id']. '>'.$answer['answer_text'].'</option>');
        }

        echo("</select>");
        echo("</div>");
      }

      //Type checkbox//

      if($value['question_input_type']=='checkbox'){

        quizzName ($ID_quizz,$compteur,$value,$questionExacte,$bdd);

        $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$value['question_id'])->fetchAll();
        $compteurans=0;

        foreach ($response as $key2 => $answer) {
        	$compteurans=$compteurans+1;
          echo("<div> <input class='checkboxElmnt' type='checkbox' id='rep".$compteurans."1q1' name='choix[]'' value=".$answer['answer_id']." '> <label for='rep1q1'>".$answer['answer_text']."</label></div>");
        }

        echo('</div>');
        $compteurans=0;
      }
			//Type input//
		  if($value['question_input_type']=='input'){

		        quizzName ($ID_quizz,$compteur,$value,$questionExacte,$bdd);

		        echo('<input id="GET-name" class="input" type="number" name="name">');
		        echo('</div>');
		      }

      //Type radio//


      if($value['question_input_type']=='radio'){

        quizzName ($ID_quizz,$compteur,$value,$questionExacte,$bdd);


        $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$value['question_id'])->fetchAll();

        foreach ($response as $key2 => $answer) {
          echo('<input type="radio" class="radioElmnt" name="radio" value='.$answer['answer_id'].' class="radio"> <label for="radio">'.$answer['answer_text'].'</label> <br/>');
        }

        echo('</div>');
      }
    }

    echo('<div class="boutonSubmit"><a href=""> <input type="submit" value="Submit"class="buttonSubmit"></a></div>');

    echo("</div>");
    echo('</form>');
    echo("</div>");
	}

 ?>
