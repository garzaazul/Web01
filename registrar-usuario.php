<?php 
include ('conexion.php');
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$password= $_POST['password'];

$sQLbUSCAR = "SELECT * FROM tb_usuario WHERE correo = '$correo'";
$eXEsQLbUSCAR = mysql_query($sQLbUSCAR, $conectar) or die ("Error en la consulta");
$iMPeXEsQLbUSCAR = mysql_fetch_row($eXEsQLbUSCAR);
if ($iMPeXEsQLbUSCAR[2] == $correo) {
	header ('location: registrarse.php?errorcorreo=1');
} else {
	$sQLiNSERT = "INSERT INTO tb_usuario (nombre, correo, password) VALUES ('$nombre','$correo','$password')";
	$eXEsQLiNSERT = mysql_query($sQLiNSERT, $conectar) or die ("Error en la consulta");
	header ('location: registrarse.php?msn=1');
}
?>