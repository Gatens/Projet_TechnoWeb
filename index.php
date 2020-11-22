<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <title>Quizz.com</title>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>
        <?php
            session_start();
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
                case ("home"):
                    include('pages/homepage.php');
                    break;
                case ("account"):
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
                    if (isset($_SESSION['connect'])){// si on ferme le navigateur on est automatiquement deconnecte
                      include('pages/quizz.php');
                    }
                    else {
                      $message='Vous devez etre connecté pour acceder aux quizz !';
                      echo '<script>alert("'.$message.'");
                      window.location.href="index.php?page=account";
                      </script>';
                    }
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
