<?php 

if(isset($_SESSION['logado'])){
	header('Location:View/registro.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/main.css" type="text/css" media="screen">
	<title>Controle Financeiro Pessoal</title>
</head>
<body>
	<main>
<header>
<h1>Bem vindo ao nosso site de Controle Financeiro Pessoal</h1>
<img src="Images/controlefinanceiro.jpg" width="400" height="400">
</header>
<div id="Serviços">
	<a href="view/login.php"><button>Login</button></a>
	<br>
	<a href="view/cadastro.php"><button>Cadastro</button></a>
</div>
</main>


</body>
</html>