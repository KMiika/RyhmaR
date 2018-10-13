<?php

  function model_get_user_info($user, $pass){
    include "../config/connection.php";
    $sql = $db->prepare("SELECT idTunnus FROM Tunnus WHERE Ktunnus = :user AND Salasana = :pass");
  	$sql->execute(array(":user"=>$user, "pass"=>$pass));
  	$result = $sql->fetch(PDO::FETCH_ASSOC);

    return $result['idTunnus'];
  }

?>
