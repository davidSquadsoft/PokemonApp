<?php
session_start();
require 'connection.php';
$spriteUrlPokemon=$_POST['spriteUrlPokemon'];
var_dump($_POST['spriteUrlPokemon']);
echo $spriteUrlPokemon;
$id_api_pokemon=$_POST['id_api_pokemon'];
$apodo=$_POST['apodo'];
$name=$_POST['name'];
$id_pj=$_POST['id_pj'];
$habilidad=$_POST['habilidad'];
$efecto_habilidad=$_POST['efecto_habilidad'];
$exp=$_POST['exp'];
$nivel=$_POST['nivel'];
$vida=$_POST['vida'];
$tipoA=$_POST['tipoA'];
$tipoB=$_POST['tipoB'];
$shinny=$_POST['shinny']?? '0';
$atkfisico=$_POST['atkfisico'];
$atkespecial=$_POST['atkespecial'];
$deffisico=$_POST['deffisico'];
$defespecial=$_POST['defespecial'];
$agilidad=$_POST['agilidad'];
$destreza=$_POST['destreza'];
$move_a_name=$_POST['move_a_name'];
$move_a_dmg=$_POST['move_a_dmg'];
$move_a_elemento=$_POST['move_a_elemento'];
$move_a_tipo=$_POST['move_a_tipo'];
$move_a_effect=$_POST['move_a_effect'];
$move_b_name=$_POST['move_b_name'];
$move_b_dmg=$_POST['move_b_dmg'];
$move_b_elemento=$_POST['move_b_elemento'];
$move_b_tipo=$_POST['move_b_tipo'];
$move_b_effect=$_POST['move_b_effect'];
$move_c_name=$_POST['move_c_name'];
$move_c_dmg=$_POST['move_c_dmg'];
$move_c_elemento=$_POST['move_c_elemento'];
$move_c_tipo=$_POST['move_c_tipo'];
$move_c_effect=$_POST['move_c_effect'];
$move_d_name=$_POST['move_d_name'];
$move_d_dmg=$_POST['move_d_dmg'];
$move_d_elemento=$_POST['move_d_elemento'];
$move_d_tipo=$_POST['move_d_tipo'];
$move_d_effect=$_POST['move_d_effect'];
$move_e_name=$_POST['move_e_name'];
$move_e_dmg=$_POST['move_e_dmg'];
$move_e_elemento=$_POST['move_e_elemento'];
$move_e_tipo=$_POST['move_e_tipo'];
$move_e_effect=$_POST['move_e_effect'];
$move_f_name=$_POST['move_f_name'];
$move_f_dmg=$_POST['move_f_dmg'];
$move_f_elemento=$_POST['move_f_elemento'];
$move_f_tipo=$_POST['move_f_tipo'];
$move_f_effect=$_POST['move_f_effect'];


$isSix = $mysqli->prepare("select count(id_pj) as cantidad from pokemon where id_pj=$id_pj and rancho=0");
$isSix->execute();

$resultisSix=$isSix->get_result();
$validatisSix=$resultisSix->fetch_assoc();
$rancho = $validatisSix['cantidad']<7 ? 0: 1;

$stmtRegisterPokemon = $mysqli->prepare("INSERT INTO `pokemon` (
 `id_api_pokemon`,
 `name`,
 `sprite`,
 `tipoa`,
 `tipob`,
 `id_pj`,
 `apodo`,
 `nivel`,
 `experiencia`,
 `vida`,
 `efecto_habilidad`,
 `rancho`,
 `habilidad`,
 `atkfisico`,
 `atkespecial`,
 `deffisico`,
 `defespecial`,
 `agilidad`,
 `destreza`,
 `move_a_name`,
 `move_a_dmg`,
 `move_a_effect`,
 `move_b_name`,
 `move_b_dmg`,
 `move_b_effect`,
 `move_c_name`,
 `move_c_dmg`,
 `move_c_effect`,
 `move_d_name`,
 `move_d_dmg`,
 `move_d_effect`,
 `move_e_name`,
 `move_e_dmg`,
 `move_e_effect`,
 `move_f_name`,
 `move_f_dmg`,
 `move_f_effect`,
 `shinny`,
 `move_a_tipo`,
 `move_b_tipo`,
 `move_c_tipo`,
 `move_d_tipo`,
 `move_e_tipo`,
 `move_f_tipo`,
 `move_a_elemento`,
 `move_b_elemento`,
 `move_c_elemento`,
 `move_d_elemento`,
 `move_e_elemento`,
 `move_f_elemento`
 ) VALUES ( ?, ?, ?,?,?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?)");

 $stmtRegisterPokemon->bind_param("issssisiiisisiiiiiisissississississisissssssssssss",
 $id_api_pokemon,
 $name,
 $spriteUrlPokemon,
 $tipoA,
 $tipoB,
 $id_pj,
 $apodo,
 $nivel,
 $exp,
 $vida,
 $efecto_habilidad,
 $rancho,
 $habilidad,
 $atkfisico,
 $atkespecial,
 $deffisico,
 $defespecial,
 $agilidad,
 $destreza,
$move_a_name,
$move_a_dmg,
$move_a_effect,
$move_b_name,
$move_b_dmg,
$move_b_effect,
$move_c_name,
$move_c_dmg,
$move_c_effect,
$move_d_name,
$move_d_dmg,
$move_d_effect,
$move_e_name,
$move_e_dmg,
$move_e_effect,
$move_f_name,
$move_f_dmg,
$shinny,
$move_f_effect,
$move_a_tipo,
$move_b_tipo,
$move_c_tipo,
$move_d_tipo,
$move_e_tipo,
$move_f_tipo,
$move_a_elemento,
$move_b_elemento,
$move_c_elemento,
$move_d_elemento,
$move_e_elemento,
$move_f_elemento
 );
 $stmtRegisterPokemon->execute();
 