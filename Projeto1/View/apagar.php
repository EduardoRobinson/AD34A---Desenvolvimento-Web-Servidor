<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css" type="text/css" media="screen">
	<title>Apagar Registro</title>
</head>
<body>
<?php
require('../Model/registro.php');
session_start();
$registros=$_SESSION['registros'];
echo("<div style=' width: 20%;
        margin: 0 auto; 
        text-align: center; 
        padding: 20px;
        table, th, td {
            border:1px solid black;
          }
        '>
        <table> 
        <thead>
        <tr>
		  	<th><h2>ID</h2></th>
            <th><h2>Tipo</h2></th>
            <th><h2>Valor</h2></th>
            <th><h2>Descrição</h2></th>
			<th><h2>Data</h2></th>
        </tr>
        </thead>");
          foreach($registros as $indice=>$value){
                echo '<tr>';
				print_r('<td>' . $indice . '</td>');
                print_r('<td>' . $value->tipo . '</td>');
                print_r('<td>' . $value->valor . '</td>');
                print_r('<td>' . $value->descricao . '</td>');
				print_r('<td>' . $value->data . '</td>');
                echo '</tr>';
          }
        echo("</table>
        </div>");
?>
<h1>Digite qual registro voce deseja apagar</h1>
<div id="apagar">
	<form id="Apagar" method="POST">
	<label>Qual registro voce deseja apagar:</label>
	<input type="search" name="id">
	<br>
	<button type="submit" name="botao" value="enviar">Apagar</button>
	</form>
</div>
<?php require_once('../Controller/apagar.php');?>
</body>
</html>