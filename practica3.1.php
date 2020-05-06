<!DOCTYPE html>
<html>
<head>
	<title>CREACION DE ARCHIVO DE TEXTO</title>
</head>
<body>
<?php
$ar =fopen("datos.txt","a")or
die("Problemas en la creacion");
fputs($ar,$_REQUEST['nombre']);
fputs($ar,"\n");
fputs($ar,$_REQUEST['comentarios']);
fputs($ar,"\n");
fputs($ar,"--------------------");
fputs($ar,"\n");
fclose($ar);
echo "Los datos se guardaron correctamente ";
$ar =fopen("datos.txt","r")or
die("No se puedo abrir el archivo");
while(!feof($ar)){
	$linea=fgets($ar);
	$lineasalto=nl2br($linea);
	echo "$lineasalto";
}
fclose($ar);
?>
</body>
</html>