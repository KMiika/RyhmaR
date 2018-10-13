<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include "../models/login_model.php";
    include "../views/login/login_view.php";


      login();
      if (isset($_POST['username']) && !empty($_POST['username'])){
        $succes=model_get_user_info($_POST['username'],$_POST['password']);
          if($succes){
            session_start();
            $_SESSION['idTunnus']=$succes;
            $_SESSION['user']=$_POST['username'];
            header("Location: login_success.php");
          }
          else {}
      }

    ?>

  </body>
</html>
