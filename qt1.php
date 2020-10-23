<?php
    $user = 'root';
    $pass = '';

    try{
        $db = new PDO ('mysql:host=localhost;dbname=php', user, $pass);
        foreach($db->query('SELECT * FROM question') as $row ){
            print_r($row);
        }
    }
    catch (PDOException $e0){
        print "Erreur :". $e->getMessage() . "<br/>";
        die;
    }

?>