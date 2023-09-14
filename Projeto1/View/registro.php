<?php require('../Model/usuario.php');
session_start();
if(empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css" type="text/css" media="screen">
	<title>Registros</title>
</head>
<body>
	<h1>Ola <?php echo $_SESSION['logado']->nome;?></h1>
	<h2>Bem vindo a tela de registros</h2>
	<div id="opcoes">
		<a href="adicionar.php"><button>Adicionar Registro</button></a>
		<br>
		<a href="apagar.php"><button>Apagar Registro</button></a>
		<br>
		<a href="alterar.php"><button>Alterar Registro</button></a>
		<br>
		<a href="listar.php"><button>Listar Registros</button></a>
	</div>
<footer>
	<form method="POST">
	<button type="submit" name="logout" value="logout">Realizar Logout</button>
	</form>
	<?php require_once('../Controller/logout.php');?>
</footer>
</body>
</html>