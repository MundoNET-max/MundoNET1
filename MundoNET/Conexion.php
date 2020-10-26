<?php
$conec=new mydqli("localhost","root","","Institutofares");
if ($conec->connect_error){
	echo"Fallo al conectar a MySQL:(".$conec->conect_errno.")".$conec->connect_error;
}
?>