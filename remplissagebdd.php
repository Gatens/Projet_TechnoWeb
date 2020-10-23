<html>

    <body>

        <?php
        // lancement de la requete
        $sql = 'INSERT INTO question VALUES (",Moscou,1,")';

        mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

        // on ferme la connexion à la base
        mysql_close();
        ?>


    </body>

</html>