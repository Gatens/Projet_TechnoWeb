<?php
/*_________________________________RECUP ANSWER__________________________________________*/
function insertanswer($user_test,$reponse,$essai,$bdd){
  $stock=$bdd->prepare('INSERT INTO user_answer VALUES (NULL,:usertest,:answer_id,:reponse)');
  $stock->bindParam(':usertest',$user_test);
  $stock->bindParam(':answer_id',$essai);
  $stock->bindParam(':reponse',$reponse);
  $stock->execute();
}

/*_________________________________RADIO/SELECTION_______________________________________*/
function radio_selection($rep_user, $answer) //Envoie 0 ou 1 si la réponse est bonne
{
    foreach($answer as $item)
    {
        if ($item['answer_id']==$rep_user)
        {
            return $item['is_valid_answer'];
        }
    }
    return 0;
}

/*_________________________________INPUT_______________________________________*/
function input($rep_user, $answer) //Envoie 0 ou 1 si la réponse est bonne
{
    if ($answer[0]['answer_id']==$rep_user)
    {
        return 1;
    }
    else {
        return 0;
    }
}

/*_________________________________CHECKBOX_______________________________________*/
function checkbox($rep_user, $answer) //Envoie 0 ou 1 si la réponse est bonne
{
    $rep=array();
    foreach($answer as $item)
    {
        if ($item['is_valid_answer']=="1")
        {
            array_push($rep,$item['answer_id']);
        }
    }
    if ($rep==$rep_user)
    {
        return 1;
    }
    else{
        return 0;
    }
}

//Fonction qui permet de comparer les réponses d'utilisateur et de la bdd
function compare($questionExacte, $question_id,$bdd)
{
    $answer = $bdd->query('SELECT answer_id,is_valid_answer FROM answer WHERE answer.answer_question_id ='.$question_id)->fetchAll();
    $question = $bdd->query('SELECT question_input_type FROM question WHERE question_id ='.$question_id)->fetchAll();

    if (!isset($_POST[$questionExacte]))
     {
        return ' Réponse incorrecte';
    }
    else{
        $rep_user = $_POST[$questionExacte];
    }
    //var_dump($rep_user);
    $essai=$question_id;
    $user_test=$_SESSION["user_id"];
    $compteur_point=0;
    switch($question[0]['question_input_type'])
    {
        case ('checkbox'):
            $bon = checkbox($rep_user, $answer);
            if($bon==1){
              $compteur_point+=1;
            }
            //var_dump($bon);
            foreach ($rep_user as $reponse) {
              //var_dump($reponse);
              insertanswer($user_test,$reponse,$essai,$bdd);
            }
            break;
        case ('selection'):
            $bon = radio_selection($rep_user, $answer);
            if($bon==1){
              $compteur_point+=1;
            }
            insertanswer($user_test,$rep_user,$essai,$bdd);
            break;
        case ('radio'):
            $bon = radio_selection($rep_user, $answer);
            if($bon==1){
              $compteur_point+=1;
            }
            insertanswer($user_test,$rep_user,$essai,$bdd);
            break;
        case ('input'):
            $bon = input($rep_user, $answer);
            if($bon==1){
              $compteur_point+=1;
            }
            insertanswer($user_test,$rep_user,$essai,$bdd);

            break;
    }
    echo ('Vous avez marqué '.$compteur_point.' point');
    return $bon ? ' Réponse Correcte' : ' Réponse incorrecte';
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
        $questionExacte="q" . $question_number . "f" . $id_quizz . "";

        /*_________________________________SELECTION_______________________________________*/
        if($type['question_input_type']=='selection')
        {
            echo("<div id='question1".$question_number."_quizz1' class='question1'>");
            // affiche le numéro de la question
            echo("<p class='question1'>Question ".$question_number." : ".$type['question_title']."".compare($questionExacte, $type['question_id'],$bdd)."</p>");
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
            echo("<p class='question1'>Question ".$question_number." : ".$type['question_title']."".compare($questionExacte, $type['question_id'],$bdd)."</p>");

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
            echo("<p class='question1'>Question ".$question_number." : ".$type['question_title']."".compare($questionExacte, $type['question_id'],$bdd)."</p>");
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
            echo("<p class='question1'>Question ".$question_number." : ".$type['question_title']."".compare($questionExacte, $type['question_id'],$bdd)."</p>");

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

$array = array("1","2");
if (in_array($id, $array))
 {
    echo "<div class='container'>";
    displayAnswer($id,$bdd);
    echo "</div>";
}
else
{
    echo '<h1>QUIZZ NOT FOUND</h1>';
}

?>
