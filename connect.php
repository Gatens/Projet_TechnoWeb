<?php try
{
    $bdd = new PDO('mysql:host=localhost;dbname=php3;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
} ?>
