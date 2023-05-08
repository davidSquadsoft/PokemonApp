<?php
session_start();
require 'connection.php';
$id=$_SESSION['id'];


$id_pj_to_delete= $_POST['id'];
$sqlDelete= "DELETE FROM `pj` WHERE `pj`.`id_pj` = $id_pj_to_delete";

$deleteResult=mysqli_query($mysqli,$sqlDelete) or die ("error de datos" . $connection->error);
