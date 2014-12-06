<?php
$bd_name= "exmn";
$bd_server="localhost";
$bd_user="root";
$bd_pass="";
$bd_connection = mysql_connect($bd_server,$bd_user,$bd_pass)or die ("error de conexion");
mysql_select_db($bd_name,$bd_connection) or die("la bd no existe");
mysql_query("SET NAMES utf8");
?>