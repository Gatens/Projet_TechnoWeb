<?php 

function pseudo($bdd,$id){
    $user = $bdd->query('SELECT surname FROM user WHERE id='.$id)->fetchAll();
    echo $user[0][0];
}

function espace(){
    for($espace=0;$espace<20;$espace++){
        echo "&nbsp";
    }
}

function bestJoueur($bdd){
    $listScore = array();
    $score = $bdd->query('SELECT * FROM score')->fetchAll();   
    for($i=0;$i<sizeof($score);$i++){
        array_push($listScore,$score[$i]['score']);
        asort($listScore);
    }  
    print_r($listScore);    
}

function tri($listTrie){
    
}


bestJoueur($bdd);

function loadScore($bdd){
    $num_ligne=0;
    
    $score = $bdd->query('SELECT * FROM score')->fetchAll();    

    $NbrCol = 5;
    $NbreData = sizeof($score);
    $NbrLigne = $NbreData/$NbrCol;
    
    for($espace=0;$espace<15;$espace++){
        echo "&nbsp";
    }
    echo "Rang :";
    for($espace=0;$espace<23;$espace++){
        echo "&nbsp";
    }
    echo "Pseudo utilisateur :";
    for($espace=0;$espace<5;$espace++){
        echo "&nbsp";
    }
    echo " Numéro du quiz :";
    for($espace=0;$espace<8;$espace++){
        echo "&nbsp";
    }
    echo "Ancien score : ";

    if ($NbreData != 0) {
        echo '<table border="1">';
        for ($j=1; $j<=$NbreData; $j++) {
            $id_joueur = $score[$num_ligne][1];
            echo '<td>';

            espace();
            echo $j;
            espace();
            //_________________________________
            echo '<td>';

            espace();
            pseudo($bdd,$id_joueur);
            espace();
            //_________________________________
            echo '<td>';

            espace();
            echo $score[$num_ligne]['quizz_id'];
            espace();
            //_________________________________
            echo '<td>';

            espace();               
            echo $score[$num_ligne]['score'];
            espace();

            echo '<tr>'; 
            $num_ligne+=1;
        }
    }
}

loadScore($bdd);


?>
