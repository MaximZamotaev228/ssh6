<?php
    function db() {
        $user='u52877';
        $pass='5248088';
        return new PDO ("mysql:host=localhost;dbname=u52877", $user, $pass, [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
      }
?>
