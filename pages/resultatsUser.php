<?php 

function loadScore($bdd){
    $num_ligne=0;
    $myID=$_SESSION["user_id"];
    $score = $bdd->query('SELECT * FROM score')->fetchAll();
    $NbrCol = 2;
    $NbreData = sizeof($score);
    $NbrLigne = $NbreData/$NbrCol;
    
    echo " Numéro du quiz :";
    for($espace=0;$espace<6;$espace++){
        echo "&nbsp";
    }
    echo "Ancien score est de : ";

    if ($NbreData != 0) {
        echo '<table border="1">';
        for ($j=1; $j<=$NbreData; $j++) {
            if($myID==$score[$num_ligne]['user_id']){
                echo '<td>';
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }
                echo $score[$num_ligne]['quizz_id'];
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }
                echo '<td>';

                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }                
                echo $score[$num_ligne]['score'];
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }                echo '<tr>';
            }  
            $num_ligne+=1;
        }
    }
}

loadScore($bdd);


?>
