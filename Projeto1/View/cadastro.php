<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css" type="text/css" media="screen">
	<title>Cadastro</title>
</head>
<body>
<h1>Cadastro</h1>
<div id="Cadastro">
	<form id="Cadastrar" method="POST">
	<label>Nome:</label>
	<input type="text" name="nome" required>
	<br>
	<br>
	<label>Email:</label>
	<input type="email" name="email" required>
	<br>
	<br>
	<label>Senha:</label>
	<input type="password" name="senha" required>
	<br>
	<button type="submit" name="botao" value="enviar">Enviar</button>
	</form>
</div>
<?php require('../Controller/cadastro.php');?>




</body>
</html>