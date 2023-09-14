<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css" type="text/css" media="screen">
	<title>Lista Registros</title>
</head>
<body>
<h1>Lista dos registros:</h1>
<div>
<form method="POST">
<label>Tipo do registro:</label>
<select id="tipo_imovel" name="tipo_imovel">
	<option value="">Todos</option>
    <option value="Apartamento">Apartamento</option>
    <option value="Casa">Casa</option>
    <option value="Condominio">Condomínio</option>
</select>
<button type="submit" name="botao" value="enviar">Listar</button>
</form>
</div>
<h1>Registros</h1>
<?php require_once('../Controller/listar.php');?>
</body>
</html>