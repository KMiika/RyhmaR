<?php
    function login(){

        echo '<form class="" action="../controllers/login.php" method="post">
          <label for="username">tunnus</label> <br>
          <input type="text" id="username" name="username" required> <br>
          <label for="password">salasana</label> <br>
          <input type="text" id="password" name="password" required> <br><br>
          <input type="submit" name="loginBtn" value="Kirjaudu">
        </form>';

    }
?>
