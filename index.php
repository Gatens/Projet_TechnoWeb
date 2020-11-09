<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <title>Quizz.com</title>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>
        <?php
            include('database/connectToDB.php');
            include('pages/header.php');

            if(!isset($_GET['page'])){
                $page='';
            }
            else{
                $page = $_GET['page'];
            }      
            
            if(!isset($_GET['id'])){
                $id='0';
            }
            else{
                $id = $_GET['id'];
            } 

            switch ($page) {
                case "home":
                    include('pages/homepage.php');
                    break;
                case "account":
                    include('pages/account.php');
                    break;
                case("register"):
                    include('pages/register.php');
                    break;
                case("login"):
                    include('pages/login.php');
                    break;
                case("createUser"):
                    include('pages/createUser.php');
                    break;
                case('quizz'):
                    include('pages/quizz.php');
                    break;
                case('answer'):
                    include('pages/answer.php');
                    break;
                default:
                    include('pages/homepage.php');
                    break;
            }
            include('pages/footer.php');
        ?>
    </body>
</html>
