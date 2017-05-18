<?php


$PATH='lib/';

include $PATH.'Conexion.php';
include $PATH.'Usuario.php';

$oUsr=new Usuario();
$oUsr->nombre='flopez';

if($oUsr->VerificaUsuario())
   $_SESSION['USR']=$oUsr;


header('location:http://localhost:8081/proy1605/');

/*session_start();
var_dump($_SESSION);*/
?>