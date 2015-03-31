<?php
include ('conexion.php');
session_start();
$usuario = $_POST['user'];
$password = $_POST['password'];
/*
if ($usuario = 'usuario@gmail.com' && $password = '123'){
$_SESSION['autenticacion']="1";
$_SESSION['user']=$_POST ["user"];
$_SESSION['pass']=$_POST ["pass"];
header ("Location: index.php");
} 
else {
header ("Location:login.php?error=1");
}*/

$sQL = "SELECT * FROM tb_usuario WHERE correo = '$usuario' AND password = '$password'";
$eXEsQL = mysql_query($sQL, $conectar) or die ("Error en la consulta");
$iMPeXEsQL = mysql_fetch_row($eXEsQL);
if ($iMPeXEsQL){
	$_SESSION['autenticacion']="1";
	$_SESSION['nombreusuario']= $iMPeXEsQL[1];
	header ("Location: index.php");
} 
else {
	header ("Location:login.php?error=1");
}
?>	