<?php
function get_tilit(){
    include "../config/connection.php";
    $sql = "SELECT Etunimi,Sukunimi,Tilinumero,Saldo FROM Asiakas1 JOIN Asiakas1_Pankkitili ON Asiakas1.idAsiakas=Asiakas1_Pankkitili.idAsiakas JOIN Pankkitili ON Asiakas1_Pankkitili.idPankkitili=Pankkitili.idPankkitili;
";

    $resultObject = $db->query($sql);

    $resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

    return $resultArray;
}
/*
function model_get_book($id){
  include "../config/connection.php";
  $sql = $db->prepare("SELECT * FROM books WHERE idBooks = :tunnus");
	$sql->bindParam(':tunnus',$id);
	$sql->execute();
	$resultArray = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $resultArray;
}

function model_add_book($name,$author){
  include "../config/connection.php";
  $sql=$db->prepare("INSERT INTO books (name,author) VALUES(:a_name,:a_author)");
  $sql->bindParam(':a_name',$name);
  $sql->bindParam(':a_author',$author);
  return $sql->execute();
}

function model_delete_book($idBooks){
    include "../config/connection.php";
    $sql=$db->prepare("DELETE FROM books WHERE idBooks = :id");
		$sql->bindParam(':id',$idBooks);
		$sql->execute();
    if ($sql->rowCount() > 0) {
          return TRUE;
        }
    else {
      return FALSE;
    }
}

function model_update_book($idBooks,$name,$author){
  include "../config/connection.php";
  $sql=$db->prepare("UPDATE books SET name=:a_name, author=:a_author WHERE idBooks=:a_idBooks");
  $sql->bindParam(':a_name',$name);
  $sql->bindParam(':a_author',$author);
  $sql->bindParam(':a_idBooks',$idBooks);
  return $sql->execute();
}
*/


?>
