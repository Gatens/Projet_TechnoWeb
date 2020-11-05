<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/main.css">
  <title>Quizz.com</title>
</head>
<body>

<?php
include('database/connectToDB.php');
include('fonctions/displayQuizz.php');
include('fonctions/displayAnswer.php');
include('pages/header.php');

if(!isset($_GET['page'])){
    $page=' ';
}
else{
    $page = $_GET['page'];
}

switch ($page) {
    case "home":
        include('pages/homepage.php');
        break;
    case "quizz":
        include('fonctions/quizzmain.php');
        break;
    case "answerQuizzMain":
        include('fonctions/answerQuizzMain.php');
        break;
    case "account":
        include('pages/account.php');
        break;
    case("register"):
        include('pages/register.php');
         break;

    default:
        include('pages/homepage.php');
    break;

    }
include('pages/footer.php');

?>

</body>
</html>
