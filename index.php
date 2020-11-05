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

if(!isset($_GET['page'])){
    $page=' ';
    include('homepage.php');
}
else{
    $page = $_GET['page'];
}

switch ($page) {
    case "home":
        include('homepage.php');
        break;
    case "quizz":
        include('quizz.php');
        break;
    case "reponse":
        include('answerQuizzMain.php');
        break;
    case "login":
        include('account.php');
        break;
    case("register"):
        include('register.php');
         break;
        
    default:
        include('main.php');
    break;
    
    }
include('footer.php')
?>

</body>
</html>