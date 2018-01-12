<?php
  $dbname = 'bdd1';
  $host='localhost:3306';
  $user='root';
  $pass= 'root';
<<<<<<< HEAD

=======
>>>>>>> fdf50e9ebb886a454646a18266a7d17a5fe4ec7c
    $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $db->query("SET NAMES UTF8");
    $db->exec("SET NAMES UTF8");
    $link = mysqli_connect("$host", "$user", "$pass", "$dbname");
<<<<<<< HEAD


?>
=======
?>
>>>>>>> fdf50e9ebb886a454646a18266a7d17a5fe4ec7c
