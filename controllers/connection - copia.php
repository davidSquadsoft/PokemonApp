<?php
$host ="sql311.epizy.com";
$user="epiz_34171414";
$pass="u0eYrcaqxxqpG";
$db="epiz_34171414_pokemon";
$connection = mysqli_connect($host, $user,$pass,$db);
mysqli_set_charset($connection, "utf8mb4");

$mysqli= new mysqli($host, $user,$pass,$db);

?>
