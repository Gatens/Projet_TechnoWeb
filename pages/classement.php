<?php 

function pseudo($bdd,$id){
    $user = $bdd->query('SELECT surname FROM user WHERE id='.$id)->fetchAll();
    $pseudo = $user[0];
    return $pseudo;
}

function loadScore($bdd){
    $num_ligne=0;
    $score = $bdd->query('SELECT * FROM score')->fetchAll();
    $user = $bdd->query('SELECT surname FROM user')->fetchAll();
    echo $user[1][0];
    $NbrCol = 5;
    $NbreData = sizeof($score);
    $NbrLigne = $NbreData/$NbrCol;
    
    echo "Rang :";
    for($espace=0;$espace<35;$espace++){
        echo "&nbsp";
    }
    echo "Pseudo utilisateur :";
    for($espace=0;$espace<10;$espace++){
        echo "&nbsp";
    }
    echo " Numéro du quiz :";
    for($espace=0;$espace<4;$espace++){
        echo "&nbsp";
    }
    echo "Ancien score est de : ";

    if ($NbreData != 0) {
        echo '<table border="1">';
        for ($j=1; $j<=$NbreData; $j++) {
                echo '<td>';
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }
                echo $j;
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }
                //_________________________________
                echo '<td>';
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }
                echo $user[$score[1]][0];
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }
                //_________________________________
                echo '<td>';
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }
                echo $score[$num_ligne]['quizz_id'];
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }
                //_________________________________
                echo '<td>';

                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }                
                echo $score[$num_ligne]['score'];
                for($espace=0;$espace<20;$espace++){
                    echo "&nbsp";
                }                echo '<tr>'; 
            $num_ligne+=1;
        }
    }
}

loadScore($bdd);


?>
