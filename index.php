<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/main.css">
  <title>Quizz.com</title>
</head>
<body>

<?php
include('database/connectToDB.php');
include('displayQuizz.php');
include('displayAnswer.php');
include('header.php');

if(!isset($_GET['page'])){
    $page=' ';
}
else{
    $page = $_GET['page'];
}

switch ($page) {
    case "home":
        include('homepage.php');
        break;
    case "quizz":
        include('quizzmain.php');
        break;
    case "answerQuizzMain":
        include('answerQuizzMain.php');
        break;
    case "account":
        include('account.php');
        break;
    case("register"):
        include('register.php');
         break;

    default:
        include('homepage.php');
    break;

    }
include('footer.php');

?>

</body>
</html>
