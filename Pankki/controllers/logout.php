<?php
include "../views/login/logout_view.php";
session_start();
session_destroy();
logout();
 ?>
