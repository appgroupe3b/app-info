<?php
  $dbname = 'app';
  $host='localhost:3306';
  $user='root';
  $pass= '';

    $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $db->query("SET NAMES UTF8");
    $db->exec("SET NAMES UTF8");
    $link = mysqli_connect("$host", "$user", "$pass", "$dbname");


?>
