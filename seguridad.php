<?php
session_start();
if ($_SESSION['autenticacion']!="1"){
header ("Location:login.php");
exit();
}
?>