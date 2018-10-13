<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pankki</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/mystyle.css" />
    <script src="myFunctions.js"></script>
    <script src="form.js"></script>
</head>
<body>
    <div id = "header">
        This is header
    </div>
    <div id = "menu">
        Menu
        <ul>
            <li id="panelTitle">Tilit ja maksut</li>
            <li> <a onclick="loadXMLDoc('tilit.html')">Tilit</a> </li>
            <li> <a onclick="loadXMLDoc('tilitapahtumat.html')">Tilitaphtumat</a> </li>
            <li> <a onclick="loadXMLDoc('kortit.html')">Kortit</a> </li>
            <li id="panelTitle"><br>Maksut</li>
            <li> <a onclick="loadXMLDoc('uusimaksu.html')">Uusi maksu</a> </li>
            <li> <a onclick="loadXMLDoc('omasiirto.html')">Oma siirto tilien välillä</a> </li>
            <li> <a onclick="loadXMLDoc('elaskut.html')">E-Laskut</a> </li>
            <li> <a onclick="loadXMLDoc('maksupohjat.html')">Maksupohjat</a> </li>
        </ul>
    </div>
    <div id = "content">
      <?php
      function logged_in(){
        session_start();
        if(isset($_SESSION['idTunnus'])) {
        echo 'Tervetuloa <b>'.$_SESSION['user'].'</b><br>';
        echo '<br><a href="../controllers/logout.php"><button>Kirjaudu ulos</button></a>';
        echo '<ul>';
          echo '<li><a href="../controllers/tilit.html">Tilit</a></li>';
        echo '</ul>';
      }
      else {
          header("Location: ../controllers/login.php");
        }
      }
       ?>
    </div>
    <div id = "footer">
        This is the footer
    </div>
</body>
</html>
