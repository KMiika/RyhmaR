<?php
include "../models/tilit_model.php";
include "../views/book/show_tilit_view.php";
include "../views/login/login_view.php";

  session_start();
  //jos kirjauduttu
  if(isset($_SESSION['idTunnus'])) {
    $Pankkitili=model_get_tilit();
    show_tilit($Pankkitili);
  }
  //jos ei kirjauduttu
  else {
    login();
  }
?>
