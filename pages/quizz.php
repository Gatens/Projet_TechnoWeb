<?php

function quizzName ($ID_quizz,$question_number,$value,$goodQuestion)
{
    echo "<div id='content ".$question_number."_quizz".$ID_quizz."' class='question1 ".$goodQuestion."'>" ;
    echo "<p class='question1'>Question ".$question_number." : ".$value['question_title']."</p>" ;
}

function displayQuizz($ID_quizz,$bdd)
{
    $quizz = $bdd->query('SELECT quizz_name FROM quizz;')->fetchAll();  // selectionne le nom du quizz

    echo '<div id="content">';
        echo '<div id="titrePage">';
            echo "<h2>Quizz" . $quizz[$ID_quizz-1]["quizz_name"] . "</h2>";
        echo '</div>';
    echo "<form action=index.php?page=answer&id=" . $ID_quizz . " method='post'>";
        echo "<div id='questionContent'>";

            // selectionne les questions correspondant à l'ID du quizz
            $question = $bdd->query('SELECT question_id, question_title,question_input_type,question_quizz_id FROM question WHERE question.question_quizz_id = '.$ID_quizz)->fetchAll();
            $question_number=0; //numéro de la question //

            foreach ($question as $key=>$value)
            {
                $question_number=$question_number+1;
                $questionExacte="q" . $question_number . "f" . $ID_quizz . "";

                // affichage

                // _________________________________SELECTION_______________________________________
                if($value['question_input_type']=='selection')
                {
                    quizzName ($ID_quizz,$question_number,$value,$questionExacte);
                    echo'<select name="'.$questionExacte.'"  class="selection" >';
                    $answer = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$value['question_id'])->fetchAll();
                    foreach ($answer as $key2 => $proposition)
                    {
                        echo('<option value="' .$proposition['answer_id']. '">'.$proposition['answer_text'].'</option>');
                    }
                    echo'</select>';

                    echo("</div>");
                }

                // _________________________________INPUT_______________________________________
                if($value['question_input_type']=='input')
                {
                    quizzName ($ID_quizz,$question_number,$value,$questionExacte);
                    echo('<input id="GET-name" class="input" type="number" name="' . $questionExacte . '"/>');
                    echo('</div>');
                }

                //_________________________________RADIO_______________________________________
                if($value['question_input_type']=='radio')
                {
                    quizzName ($ID_quizz,$question_number,$value,$questionExacte);
                    $answer = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$value['question_id'])->fetchAll();
                    foreach ($answer as $key2 => $proposition)
                    {
                        echo('<input type="radio" class="radioElmnt" name="' . $questionExacte . '" value='.$proposition['answer_id'].' class="radio"> <label for="radio">'.$proposition['answer_text'].'</label> <br/>');
                    }
                    echo('</div>');
                }

                // _________________________________CHECKBOX_______________________________________
                if($value['question_input_type']=='checkbox')
                {
                    quizzName ($ID_quizz,$question_number,$value,$questionExacte,$bdd);
                    $answer = $bdd->query('SELECT answer_id,answer_text,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$value['question_id'])->fetchAll();
                    $answer_counter=0;
                    foreach ($answer as $key2 => $proposition)
                    {
                        $answer_counter=$answer_counter+1;
                        echo("<div> <input class='checkboxElmnt' type='checkbox' id='rep".$answer_counter."1q1' name='" . $questionExacte . "[]' value=".$proposition['answer_id']." '> <label for='rep1q1'>".$proposition['answer_text']."</label></div>");
                    }
                    echo('</div>');
                    $answer_counter=0;
                }
            }
            echo('<div class="boutonSubmit"><a href=""> <input type="submit" value="Envoyer"class="buttonSubmit"></a></div>');
            echo("</div>");
        echo('</form>');
    echo("</div>");
};

$array = array("1","2");
if (in_array($id, $array))
 {
    echo "<div class='container'>";
    displayQuizz($id,$bdd);
    echo "</div>";
}
else{
    echo '<h1>QUIZZ NOT FOUND</h1>';
}

?>
