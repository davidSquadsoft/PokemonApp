<?php
session_start();
require 'connection.php';
$id=$_SESSION['id'];
$email=$_SESSION['email'] ;
$namePlayer=$_SESSION['namePlayer'] ;

$spriteUrl = $_POST['spriteUrl'];
$namePj = $_POST['namePj'];
$regionPj = $_POST['regionPj'];
$fuerza = $_POST['fuerza'];
$destreza = $_POST['destreza'];
$resistencia = $_POST['resistencia'];
$suerte = $_POST['suerte'];
$percepcion = $_POST['percepcion'];
$inteligencia = $_POST['inteligencia'];
$apariencia = $_POST['apariencia'];
$zennys=$_POST['zennys'];
$informatica = $_POST['informatica'];
$conocimientopkmn = $_POST['conocimientopkmn'];
$mecanica = $_POST['mecanica'];
$pelea = $_POST['pelea'];
$tecnologia = $_POST['tecnologia'];
$cultura = $_POST['cultura'];
$cocina = $_POST['cocina'];
$supervivencia = $_POST['supervivencia'];
$cartografia = $_POST['cartografia'];
$conducir = $_POST['conducir'];
$investigacion = $_POST['investigacion'];
$pericias = $_POST['pericias'];
$subterfugio = $_POST['subterfugio'];
$sigilo = $_POST['sigilo'];
$medicina = $_POST['medicina'];
$interpretacion = $_POST['interpretacion'];
$ciencias = $_POST['ciencias'];
$atletismo = $_POST['atletismo'];
$alerta = $_POST['alerta'];
$intimidacion = $_POST['intimidacion'];
$inventario = $_POST['inventario'];

$stmtRegisterPj = $mysqli->prepare("INSERT INTO `pj` (`id`, 
`name`, 
`sprite`,  
`zenny`, 
`region`, 
`fuerza`, 
`destreza`, 
`resistencia`, 
`suerte`, 
`percepcion`, 
`inteligencia`, 
`apariencia`, 
`conocimientopkmn`, 
`mecanica`, 
`pelea`, 
`tecnologia`, 
`cultura`, 
`cocina`, 
`supervivencia`, 
`cartografia`, 
`conducir`, 
`informatica`, 
`investigacion`, 
`pericias`, 
`subterfugio`, 
`sigilo`, 
`medicina`, 
`interpretacion`, 
`ciencias`, 
`atletismo`, 
`alerta`, 
`intimidacion`,
inventario
) VALUES 
( ?, ?, ?, ?, ?,  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)");
$stmtRegisterPj->bind_param("issisiiiiiiiiiiiiiiiiiiiiiiiiiiis",
$id,
$namePj,
$spriteUrl,
$zennys,
$regionPj,
$fuerza,
$destreza,
$resistencia,
$suerte,
$percepcion,
$inteligencia,
$apariencia,
$conocimientopkmn,
$mecanica,
$pelea,
$tecnologia,
$cultura,
$cocina,
$supervivencia,
$cartografia,
$conducir,
$informatica,
$investigacion,
$pericias,
$subterfugio,
$sigilo,
$medicina,
$interpretacion,
$ciencias,
$atletismo,
$alerta,
$intimidacion,
$inventario
);
$stmtRegisterPj->execute();

header("location:../dashboard");





