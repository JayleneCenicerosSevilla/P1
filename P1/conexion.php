<?php
/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/
define("HOST",'localhost');
define ("BD",'cliente01');
define ("USER_BD",'root');
define ("PASS_BD",'root');

function conecta (){
	if(!($con = mysql_connect(HOST,USER_BD,PASS_BD))){
		echo "Error conectando al servidor de BBDD";
		exit();
	}
	if(!mysql_select_db(BD,$con)){
		echo "Error Seleccionando BD";
		exit();
	}
	return $con;
}
function consulta($sql){
   $con = conecta();
   $res = mysql_query($sql, $con);
   return $res;
}

function numRegistros($res){
   $con = conecta();
   $num = mysql_num_rows($res);
   return $num;
}

function desconecta() {
}
?>