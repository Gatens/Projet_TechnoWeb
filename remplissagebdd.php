<html>

    <?php

        $user = 'root';


        try{
            $db = new PDO ('mysql:host=localhost;dbname=php', $user);
            print "Connecté";
        }
        catch (PDOException $e0){
            print "Erreur :". $e->getMessage() . "<br/>";
            die;
        } 
    ?>

    <body>

        <?php
        // lancement de la requete
        $sql = 'INSERT INTO question VALUES (",Moscou,1,")';

        // on ferme la connexion à la base
        mysql_close();
        ?>


    </body>

</html>