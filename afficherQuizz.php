<?php
	include('connectToDB.php');
	function afficherQuizz($quizzId,$bdd){
		/*titre et contenu*/

    function printTitle ($quizzId,$comp,$line,$exactQuestion,$bdd){

      echo("<div id='question ".$comp."_quizz".$quizzId."' class='questionQuizz ".$exactQuestion."'>");
      echo("<p class='titreQuestion'>Question".$comp." : ".$line['question_title']."</p>");
    }


    $quizz = $bdd->query('SELECT quizz_name FROM quizz;')->fetchAll();

    echo('<div id="content"><div id="titrePage"><h2>Quizz '.$quizz[$quizzId-1]['quizz_name'].'</h2></div>'); //Print quizz title from db
    echo('<form action="reponsequizz.php?id='.$quizzId.'" method="post"><div id="questionContent">');
    /*question quizz start*/
    $question = $bdd->query('SELECT question_id, question_title,question_input_type,question_quizz_id FROM question WHERE question.question_quizz_id = '.$quizzId)->fetchAll();
    $comp=0;/*compteur de question affichées*/

    foreach ($question as $key=>$line){
      $comp=$comp+1;

      $questionExacte="q".$comp."f".$quizzId."";

      // Printing forms


      // ---------------------------checkbox------------------------------------------//


      if($line['question_input_type']=='checkbox'){

        printTitle ($quizzId,$comp,$line,$questionExacte,$bdd);

        $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$line['question_id'])->fetchAll();
        $compans=0;

        foreach ($response as $key2 => $answer) {
        	$compans=$compans+1;
          echo("<div> <input class='checkboxElmnt' type='checkbox' id='rep".$compans."1q1' name='choix[]'' value=".$answer['answer_id']." '> <label for='rep1q1'>".$answer['answer_text']."</label></div>");
        }

        echo('</div>');
        $compans=0;
      }

      // ---------------------------radio------------------------------------------//


      if($line['question_input_type']=='radio'){

        printTitle ($quizzId,$comp,$line,$questionExacte,$bdd);


        $response = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$line['question_id'])->fetchAll();

        foreach ($response as $key2 => $answer) {
          echo('<input type="radio" class="radioElmnt" name="radio" value='.$answer['answer_id'].' class="radio"> <label for="radio">'.$answer['answer_text'].'</label> <br/>');
        }

        echo('</div>');
      }
    }
    /*question quizz end*/
    /*start submit button*/

    echo('<div class="boutonSubmit"><a href=""> <input type="submit" value="Submit"class="buttonSubmit"></a></div>');



    /*end submit button*/
    echo("</div>");/*end div questionContent*/
    echo('</form>');
    echo("</div>");/*end div content*/
	}

 ?>
